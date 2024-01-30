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
   // return view('welcome');

   $data =[
    'titulo'=>'hola a todos',
    'contenido'=>'el perro ladro todo el dia '
   ];
   Mail::send('emails.test', $data, function($message){
        $message->to('tonysibaja@gmail.com', 'tony')->subject('hola a todos');
   });
});
