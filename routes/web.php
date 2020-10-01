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
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});
Route::get('admin', function () {
    return view('admin_template');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::get('register', 'AuthController@register');
Route::post('create', 'AuthController@create');
Route::get('home', 'HomeController@index'); 
Route::post('reset_password_without_token', 'AuthController@validatePasswordRequest');
Route::get('forgotpassword', 'AuthController@forgotpassword');



Route::post('/profiledetails', 'HomeController@updateprofiledetails');
Route::get('/gras/useropration', 'HomeController@requestdetails');

//Route::get('/quarter-list', 'HomeController@getData');
//Route::get('homedata', [
    //'uses' => 'HomeController@getData',
   // 'as' => 'quarter-list'
//]); //for datatable