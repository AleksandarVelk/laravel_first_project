<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','WelcomeController@index');
Route::get('admin','AdminController@index');

// Route::post('/admin', function(){
// 	return 'post created';
// });

Route::post('admin/addNewTab','AdminController@addNewTab');
Route::delete('admin/deleteTab{id}','AdminController@deleteTab');
// Route::get('homepage','AgriproductsController@index');
// Route::get('homepage/create', 'AgriproductsController@create');
// Route::get('homepage/{id}','AgriproductsController@show');
// Route::post('homepage', 'AgriproductsController@store');
// Route::get('login', 'WelcomeController@login');

Route::resource('homepage','AgriproductsController');
Route::controllers(['auth' => 'Auth\AuthController', 'password' => 'Auth\PasswordController',]);

Route::get('foo', ['middleware' => 'manager', function(){

return 'This page may only be viewd by managers';
}]);