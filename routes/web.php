<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'index']);

Route::get('/productos/lista', [Controller::class, 'listaP']);
Route::get('/productos/crear', [Controller::class, 'crear']);
Route::post('/productos/crear', [Controller::class, 'guardar']);
Route::get('/productos/ver/{id}', [Controller::class, 'detalle']);

Route::get('login', [Controller::class, 'login']); 


Route::get('listaAparatos', [Controller::class, 'lista']); 

//Ruta con parámetro a una función anónima
/* Route::get('aparato/{nombre}', function ($nombre) {
    return 'Aparato: '.$nombre;
}); */

/* Route::get('aparato/{nombre?}', function ($nombre=null) {
    return 'Aparato: '.$nombre;
}); */

/* Route::get('aparato/{nombre}', function ($nombre) {
    return $nombre; 
}) -> where('nombre','[A-Za-z]+');  */

Route::get('aparato/{nombre}/{repeticiones}', function ($nombre, $repeticiones) {
    return 'En el aparato '.$nombre. 'realizar '.$repeticiones; 
}) -> where(['nombre'=> '[A-Za-z]+', 'repeticiones'=>'[0-9]+']); 

Route::get('nombres/{nombre}/{apellido}', function ($nombre, $apellido) {
    return 'Bienvenido '.$nombre. 'tu apellido es '.$apellido; 
}) -> where(['nombre'=> '[A-Za-z]+', 'apellido'=>'[A-Za-z]+']); 

Route::get('aparato/{repeticiones}', [Controller::class, 'show']) 
->where('repeticiones','[0-9]+');


Route::get('principal', [Controller::class, 'index']);

