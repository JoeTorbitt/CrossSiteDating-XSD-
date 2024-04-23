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


// Like function 

Route::middleware('auth')->group(function () {

Route::get('/like/{dater}', 'App\Http\Controllers\DaterController@liked')->name('dater.liked');
Route::post('/like/{dater}', 'App\Http\Controllers\DaterController@like')->name('dater.like');
Route::get('/liked', 'App\Http\Controllers\DaterController@liked')->name('dater.liked');
Route::post('/unlike/{dater}', 'App\Http\Controllers\DaterController@unlike')->name('dater.unlike');
Route::get('/unlike/{dater}', 'App\Http\Controllers\DaterController@unlike')->name('dater.unlike');
});


//Route::post('message/store', 'MessageController@store')->name('message.store');



//

Route::get('/daters', [DaterController::class, 'index'])->name('index');
Route::get('/daters/{dater}', [DaterController::class, 'show'])->name('show');

//Route::middleware(['auth'])->group(function () {
//    Route::resource('matches', MatchController::class)->only(['index', 'store']);
//});















//vulnerabilities*
//XSS

Route::get('/XSS', function () {
    return view('vulnerabilities/XSS/XSS');
})->name('XSS');

Route::get('/explainXSS', function () {
    return view('vulnerabilities/XSS/explainXSS');
})->name('explainXSS');

Route::get('/exploitXSS', function () {
    return view('vulnerabilities/XSS/exploitXSS');
})->name('exploitXSS');

Route::get('/mitigateXSS', function () {
    return view('vulnerabilities/XSS/mitigateXSS');
})->name('mitigateXSS');



//SQLInjection

Route::get('/SQLInjection', function () {
    return view('vulnerabilities/SQLInjection/SQLInjection');
})->name('SQLInjection');

Route::get('/explainSQLInjection', function () {
    return view('vulnerabilities/SQLInjection/explainSQLInjection');
})->name('explainSQLInjection');

Route::get('/exploitSQLInjection', function () {
    return view('vulnerabilities/SQLInjection/exploitSQLInjection');
})->name('exploitSQLInjection');

Route::get('/mitigateSQLInjection', function () {
    return view('vulnerabilities/SQLInjection/mitigateSQLInjection');
})->name('mitigateSQLInjection');




//CSRF

Route::get('/CSRF', function () {
    return view('vulnerabilities/CSRF/CSRF');
})->name('CSRF');

Route::get('/explainCSRF', function () {
    return view('vulnerabilities/CSRF/explainCSRF');
})->name('explainCSRF');

Route::get('/exploitCSRF', function () {
    return view('vulnerabilities/CSRF/exploitCSRF');
})->name('exploitCSRF');

Route::get('/mitigateCSRF', function () {
    return view('vulnerabilities/CSRF/mitigateCSRF');
})->name('mitigateCSRF');

//end vulnerabilities



Route::get('/users/{user}', 'UserController@show')->name('users.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// login, register and sign out function 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>