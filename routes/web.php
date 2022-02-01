<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login','App\Http\Controllers\Auth\loginController@index')->name('login');
Route::post('login','App\Http\Controllers\Auth\loginController@login');
Route::get('logout','App\Http\Controllers\Auth\loginController@logout');


Route::get('register','App\Http\Controllers\Auth\registerController@index');
Route::post('register','App\Http\Controllers\Auth\registerController@store');

Route::get('test', function(){
    if (Auth::check()) {
        return Auth::user();
    }else{
        return 'login';
    }
});

Route::middleware('auth')->group(function(){
    Route::get('admin', function(){
    return Auth::user();    
    return 'wellcome to admin';
    });
    Route::get('dashboard', function(){
    return 'wellcome to dashboard';
    });
    Route::get('update', function(){
    return 'wellcome to update';
    });
    Route::get('posts', function(){
    return 'wellcome to posts';
    });
});



