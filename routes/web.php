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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/saludo/{name}', function ($name){
    return 'Hola mi estimado: ' . $name;
});

Route::get('/suma/{num1}/{num2}', function ($num1, $num2){
    return 'Suma: ' . $num1 + $num2;
})-> where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/multi/{num1}/{num2}/{num3?}', function ($num1, $num2, $num3 = 1){
    return 'Multi: ' . $num1 * $num2 * $num3;
})-> where(['num1' => '[0-9]+', 'num2' => '[0-9]+', 'num3' => '[0-9]+']);

