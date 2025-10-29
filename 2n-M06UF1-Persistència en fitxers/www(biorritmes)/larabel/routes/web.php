<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NouController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('salutacio', [NouController::class,'saluda']);


Route::get('vista/', [NouController::class,'carregavista']);


Route::get('vistaPrueba/{num1}/{num2}', [NouController::class,'parametreRequest']);

Route::get('if/{valor}', [NouController::class,'demoif']);


Route::get('bucle', [NouController::class,'demoFor']);



Route::get('/text', function () {
    return '<h1> Soc en Bernat </h1>';

});

Route::get('/multiplicacio/{x}/{y}', function ($x,$y) {
$multiplicacio=$x*$y;

  return view('nom',['resultat'=> $x. '*' .$y. '=' .$multiplicacio]);


});


Route::get('/resta/{x}/{y}', function ($x,$y) {
$resta=$x-$y;


 return view('nom',['resultat'=> $x. '-' .$y. '=' .$resta]);
});


Route::get('/suma/{x}/{y}', function ($x,$y) {
$suma=$x+$y;


 return view('nom',['resultat'=> $x. '+' .$y. '=' .$suma]);
});


Route::get('/divisio/{x}/{y}', function ($x,$y) {
$divisio=$x/$y;


 return view('nom',['resultat'=> $x. '/' .$y. '=' .$divisio]);
});


