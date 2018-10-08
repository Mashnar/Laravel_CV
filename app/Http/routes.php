<?php
use App\Controller;
use App\RegistrationController;
use App\SessionController;
use App\CRUD;
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

Route::get('/', function () {
    return view('welcome');
});

//zajmuje sie rejestracja 
Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
Route::get('/edit/{id}','CRUD@edit')->name('edit');
Route::post('update','CRUD@update')->name('update');
Route::post('delete','CRUD@delete')->name('delete');
Route::post('download','CRUD@download')->name('download');









//logowanie 
Route::get('/login', 'SessionController@create');
Route::post('login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');
