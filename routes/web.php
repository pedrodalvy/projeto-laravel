<?php

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

use Illuminate\Http\Request;

Route::get('/', static function () {
    return view('welcome');
});

Route::prefix('/teste')->group(static function () {
    Route::get('/', static function () {
        return view('teste');
    })->name('teste');

    Route::get('param/{nome?}', static function ($nome = null) {
        return view('param');
    })->name('teste.param');
});


Route::redirect('novoteste', 'teste', 301);

Route::get('novoteste2', static function () {
    return redirect()->route('teste.param');
});

Route::get('parametro/{nome?}', static function ($nome = null) {
    if (isset($nome)) {
        return "Olá $nome, seja bem vindo";
    }

    return 'Nenhum parametro informado';
})->where('nome', '[A-Za-z]*');

///////////////////////////

Route::post('/requisicoes', static function (Request $req) {
    return 'POST';
});

///////////////////////////
Route::get('/lista', 'MeuControlador@lista');
Route::get('/multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar')->where('n1', '(\d)+')->where('n2', '(\d)+');

