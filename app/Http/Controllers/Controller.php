<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function show($repeticiones){
        return 'En dicho aparato realizar '.$repeticiones. ' series';
    }

    public function index(){
        $productos=[
            "Oxbow" => 'ox.jpg',
            "Cunipic" => 'cu.jpg',
            "Abene" => 'abe.jpg',
        ];
        $cadena="Lista de productos";
        return view('productos', compact('productos','cadena'));
    }
    public function listaProductos(){
        $nombres=['Oxbow','Cunipic','Abene'];
        $cadena="Productos";
        return view('nombres', compact('nombres','cadena'));
    }

    public function lista(){
        $aparatos=['Smith', 'Prensa', 'Hack'];
        $cadena="Lista de aparatos";
        return view('aparatos', compact('aparatos','cadena'));
    }

    public function listaP(){
        $productos=array(
            '1' => array(
                'N°'=>"1",
                'Nombre'=>"Oxbow - Pellets",
                'Cantidad'=>"500gr",
                'Fecha de caducidad'=>"11/12/2022",
                'Categoría de animal'=>"Cuyo",
                'Precio'=>"$300"),
            '2' => array(
                'N°'=>"2",
                'Nombre'=>"Cunipic - Pellets",
                'Cantidad'=>"800gr",
                'Fecha de caducidad'=>"11/12/2022",
                'Categoría de animal'=>"Cuyo",
                'Precio'=>"$230"),  
            '3' => array(
                'N°'=>"3",
                'Nombre'=>"Abene - Pellets",
                'Cantidad'=>"250gr",
                'Fecha de caducidad'=>"11/12/2022",
                'Categoría de animal'=>"Cuyo",
                'Precio'=>"$120"),
            );
            $i=1;
            $cadena="Lista de productos";
            return view('productos.lista', compact('productos','cadena','i'));
    }
    public function crear(){
        return view(productos.crear);
    }
    public function login(){
        return view('iniciar');
    }
}
