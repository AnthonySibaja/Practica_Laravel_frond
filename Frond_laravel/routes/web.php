<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Carbon\Carbon;
use App\Models\User;

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



Route::group(['middleware'=>'web'], function(){
    Route::resource('/post', PostController::class);

    // Route::get('/dates', function(){
    //     $date = new DateTime('+1 week');
    //     echo $date->format('d, M Y'); 
    //     echo '<br>';
    //     echo Carbon::now()->addDays()->diffForHumans();
    //     echo '<br>';
    //     echo Carbon::now()->subMonths(5)->diffForHumans();
    //     echo '<br>';
    //     echo Carbon::now()->yesterday();
    //     echo '<br>';
    // });

    Route::get('/getname', function(){
        $user =User::find(1);
        echo $user->name;


    });
    Route::get('/setname', function(){
        $user =User::find(1);
        $user->name="pepillo";
        $user->save();

    });

    
});

