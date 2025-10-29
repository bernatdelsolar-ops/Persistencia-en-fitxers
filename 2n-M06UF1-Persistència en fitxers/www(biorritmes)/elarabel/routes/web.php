<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
   // return view('welcome');
//});

/*Route::get('/hola', function () {
    return <h1>Soc en Bernat Del Solar </h1>
;
});*/

Route::get('/suma', function () {

    $resultat = 4+4;
    return 'La suma es (4+4):' . $resultat;
});