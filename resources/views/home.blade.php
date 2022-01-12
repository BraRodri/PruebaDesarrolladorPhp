<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba Desarrollador</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/scripts.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row vh-100 justify-content-center align-items-center">
                <div class="col-12 mt-5">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-10 col-12">
                                    <h4 class="text-primary font-weight-bold">
                                        Aportes en linea rápidos y seguros
                                    </h4>
                                    <p>
                                        Ahora puedes hacer tus pagos mensuales correspondientes a la cuota de tu
                                        Plan de Ahorro ingresando a nuestra plataforma de pagos en linea.
                                    </p>
                                </div>
                                <div class="col-lg-2 col-12 text-left imagen-logo">
                                    <img src="{{ asset('img/logo-prueba-php.png') }}" class="img-fluid w-75">
                                </div>
                                <div class="col-lg-12">
                                    <hr class="w-25 mt-1 mb-4">
                                    <p>
                                        Para continuar, completa el siguiente formulario para ver la lista de tus pagos.
                                    </p>

                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <form id="formulario_consulta" class="mt-3 needs-validation" novalidate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <label class="font-weight-bold">Tipo de documento</label>
                                                        <select class="form-control" id="tipo_documento" name="tipo_documento" required>
                                                            <option selected disabled value="">Tipo de documento</option>
                                                            <option value="1">Cedula de ciudadanía</option>
                                                            <option value="2">Cedula de extranjería</option>
                                                            <option value="3">NIT</option>
                                                            <option value="4">Pasaporte</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Debes Seleccionar una opción!
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12">
                                                        <label class="font-weight-bold">Número de documento</label>
                                                        <input type="text" class="form-control cajasTexto" id="numero_documento" name="numero_documento" placeholder="Ingresar Número de documento" minlength="5" maxlength="10" pattern="[0-9]+" onkeypress="return valideKey(event);" required>
                                                        <div class="invalid-feedback">
                                                            Debes ingresar un numero de documento correcto!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4" style="text-align: right !important;">
                                                    <input type="submit" id="btn-consultar" class="btn btn-dark" value="Consultar" disabled>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-lg-8 mt-4" id="div_content_error">
                                            <div class="alert alert-light alert-dismissible fade show border" role="alert">
                                                <strong><span id="mensaje_etiqueta_error"></span></strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="col-lg-8 mt-4" id="div_content_success">
                                            <p>
                                                Listado de pagos del usuario <strong><span id="text_nombre_cliente"></span></strong>:
                                            </p>
                                            <ul class="list-group" id="agregar_listado">
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
