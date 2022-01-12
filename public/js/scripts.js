//funcion de bootstrap
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
})();

$('.alert').on('click', function () {
    $('.alert').alert('close');
})
$('#div_content_error').hide();
$('#div_content_success').hide();

//validar campo solo sea numero
function valideKey(evt){
    var code = (evt.which) ? evt.which : evt.keyCode;

    if(code==8) {
      return true;
    } else if(code>=48 && code<=57) {
      return true;
    } else{
      return false;
    }
}

//validar que no esten vacios los campos antes de enviar
$("input[name='numero_documento']").on("change", function(){
    if($(this).val() != "" && $("select[name='tipo_documento']").find(':selected').val() != null){
        $("#btn-consultar").removeAttr("disabled");
    } else {
        $("#btn-consultar").attr("disabled", "disabled");
    }
});


//proceso de consulta
$('#formulario_consulta').on('submit', function(e) {
    // evito que propague el submit
    e.preventDefault();
    $('#div_content_error').hide();
    $('#div_content_success').hide();
    $('#agregar_listado').empty();

    var $thisForm = $('#formulario_consulta');

    var tipo_documento = $thisForm.find("select[name='tipo_documento']").find(':selected').val();
    var numero_documento = $thisForm.find("input[name='numero_documento']").val();

    // agrego la data del form a formData
    var formData = new FormData(this);
    formData.append('tipo_documento', tipo_documento);
    formData.append('numero_documento', numero_documento);

    //mostrar log de datos
    console.log("tipo_documento: " + tipo_documento + "\nnumero_documento: " + numero_documento);

    //ruta
    var url = "/consultar";

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        type: "POST",
        encoding:"UTF-8",
        url: url,
        data: formData,
        processData: false,
        contentType: false,
        dataType:'json',
        beforeSend:function(){
            swal("Consultado información, espere...", {
                button: false,
                timer: 2000
            });
        }
    }).done(function(respuesta){
        console.log(respuesta);
        if (respuesta.error) {

            setTimeout(function(){
                swal("Información encontrada", {
                    icon: "success",
                    button: false,
                    timer: 2000
                });

                $('#div_content_success').show();
                $('#div_content_error').hide();
                $('#text_nombre_cliente').text(respuesta.listado_pagos.nombre);

                var bloque = '';
                respuesta.listado_pagos.data[0].forEach(element => {
                    if(element['vigencia'] == 1){

                        var valor = new Intl.NumberFormat('es-CO').format(element['valor']);

                        bloque += `
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-6">
                                        <strong>Numero de Plan:</strong> <br>
                                        ${element['num_plan']}
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-6">
                                        <strong>Valor:</strong> <br>
                                        $${valor}
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <strong>Vencimiento:</strong> <br>
                                        ${element['vencimiento']}
                                    </div>
                                </div>
                            </li>
                        `;
                    }
                });
                $('#agregar_listado').append(bloque);

            },2000);

        } else {
            setTimeout(function(){
                swal("Información no encontrada", {
                    icon: "error",
                    button: false,
                    timer: 2000
                });

                $('#div_content_success').hide();
                $('#div_content_error').show();
                $('#mensaje_etiqueta_error').text(respuesta.mensaje);
            },2000);
        }
    }).fail(function(resp){
        console.log(resp);
    });

});
