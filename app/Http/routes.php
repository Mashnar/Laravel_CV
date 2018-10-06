<?php
use App\RegistrationController;
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



Route::get('/main',function()
{
echo "chuj";
});




//logowanie 
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
