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

Auth::routes();
/* Auth::routes(['verify' => true]); //Activando la verificación de correo */

Route::get('/api/user','UsuariosController@index');

Route::get('/home', ['as'=>'home','uses'=>'HomeController@index']);

Route::get('/api/conversacion',['as'=>'conversacion.index','uses'=>'ConversacionController@index']);
Route::get('/api/mensajes',['as'=>'mensages.index','uses'=>'MensagesController@index']);
Route::post('/api/mensajes',['as'=>'mensages.store','uses'=>'MensagesController@store']);
