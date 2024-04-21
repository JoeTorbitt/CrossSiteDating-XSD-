<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
//use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DaterController;

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

Route::get('/home', function () {
    return view('home');
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
    

Route::get('/profile', function () {
    //return view('welcome');
    return "My Account";
});

Route::get('/daters', [DaterController::class, 'index'])->name('index');
Route::get('/daters/{dater}', [DaterController::class, 'show'])->name('show');



Route::get('/user/{id}', function($id){
return "This is user number ". $id;
});

Route::get('/users/{user}', 'UserController@show')->name('users.show');


Route::get('/matches', 
'App\Http\Controllers\MatchesController@index'); 

Route::resource('matches',
'App\Http\Controllers\MatchesController'); 

Route::get('/match/{id}/{name}', 
'App\Http\Controllers\MatchesController@show'); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>