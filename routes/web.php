<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

/*
Route::get('/', function () {
    //return view('welcome');
    //Ejemplo pasando datos a una vista 
    return view('vista1',['nombre'=>'Juna']);
});
// Validar si una vista Existe 
if (View::exists('vista1')) {
    Route::get('/', function(){
        //return view('vista1');
        return view('vista1',['nombre'=>'Juna']);
    });
}else{
    Route::get('/',function(){
        return 'la vista solicitada no Existe';
    });
}

*/
//ejemplo concontroller 


//Route::get('/','App\Http\Controllers\InicioController@index');


Route::get('/', function () {
    return view('vista3');
    //Ejemplo pasando datos a una vista 
   // return view('vista1',['nombre'=>'Juna']);
});


//ejemplo 1
Route::get('/texto', function(){
    return '<h1>Esto es un texto de prueba</h1>';
});
//ejemplo arreglo 
Route::get('/arreglo', function(){
    $arreglo = ['lunes','martes','miercoles'];
    $arreglo2 = [
        'id'=>'1',
        'Descripcion'=>'Producto 1'
    ];
    return $arreglo2;
});

//ejemplo 3 - parametros
Route::get('/nombre/{nombre}', function($nombre){
    return'el nombre es : ' .$nombre;
});

//ejemplo 4 parametros por defecto 
Route::get('/cliente/{cliente?}', function($cliente='cliente general'){
    return'el cliente es : ' .$cliente;
});

//ejemplo 5 redirigir una ruta 
Route::get('/ruta1', function(){
    return '<h1>esta es la vista de la ruta 1a</h1>';
})->name('rutaN1');

Route::get('/ruta2', function(){
    return redirect()->route('rutaN1');

});

//ejemplo 6 validar que solo se inrese caracteres numericos o letras
Route::get('/usuario/{usuario}',function($usuario){
    return ' El usuario es :' .$usuario;
//})->where('usuario','[0-9]+');
})->where('usuario','[A-Za-z]+');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
