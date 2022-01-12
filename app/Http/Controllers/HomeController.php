<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ListaPagos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function consultar(Request $request)
    {
        //datos
        $error = false;
        $mensaje = '';
        $listado_pagos = null;

        //buscar cliente
        $cliente = Client::where(['tipo_documento' => $request->tipo_documento, 'numero_documento' => $request->numero_documento])->first();
        if($cliente){

            //buscar lista de pagos
            $lista = ListaPagos::where('client_id', $cliente->id)->get();
            if(count($lista) > 0){
                $error = true;

                $data = array();
                foreach ($lista as $key => $value) {
                    $new_data = array(
                        'num_plan' => $value->num_plan,
                        'valor' => $value->valor,
                        'vencimiento' => $value->vencimiento,
                        'vigencia' => $value->vigencia,
                    );
                    array_push($data, $new_data);
                }

                $listado_pagos = array(
                    'nombre' => $cliente->nombre,
                    'data' => [
                        $data
                    ]
                );
            } else {
                $error = false;
                $mensaje = 'El usuario con el N° ' . $request->numero_documento . ', no cuenta actualmente con listado de pagos.';
            }

        } else {
            $error = false;
            $mensaje = 'Error, no existe ningun usuario registrado con el N° ' . $request->numero_documento . ', por tal motivo no se pueden mostrar la lista de pagos.';
        }

        echo json_encode(array('error' => $error, 'mensaje' => $mensaje, 'listado_pagos' => $listado_pagos));
    }
}
