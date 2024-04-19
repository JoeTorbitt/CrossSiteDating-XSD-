<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
    

Route::get('/Myaccount', function () {
    //return view('welcome');
    return "My Account";
});


//Route::get('/login', function () {
  //  return "login";
//});

//Route::get('/register', function () {  
   // return "register";
//});

Route::get('/signin', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/signin', 'Auth\LoginController@login');
Route::get('/signup', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/signup', 'Auth\RegisterController@register');

Route::get('/user/{id}', function($id){
return "This is user number ". $id;
});


Route::get('/matches', 
'App\Http\Controllers\MatchesController@index'); 

Route::resource('matches',
'App\Http\Controllers\MatchesController'); 

Route::get('/match/{id}/{name}', 
'App\Http\Controllers\MatchesController@show'); 
