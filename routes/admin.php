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
/*
Route::namespace('front')->group(function(){

    Route::get('admin', 'UserController@showAdmin');
    Route::prefix('admin') ->group(function () {
    Route::get('show', 'UserController@showAdmin');
    });

    //Another way to write the the group

    Route::group(['prefix' => 'users', 'middleware' => 'auth'], function (){

        Route::get('/', function (){
        return 'users page';
        });

        Route::get('show','UserController@showAdmin');
});
});
*/

