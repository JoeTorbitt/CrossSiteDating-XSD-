<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DaterController;
use App\Http\Controllers\XssController;
use Illuminate\Support\Facades\DB;

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
    return view('profile');
    
});


// Like function 

Route::middleware('auth')->group(function () {

Route::get('/like/{dater}', 'App\Http\Controllers\DaterController@liked')->name('dater.liked');
Route::post('/like/{dater}', 'App\Http\Controllers\DaterController@like')->name('dater.like');
Route::get('/liked', 'App\Http\Controllers\DaterController@liked')->name('dater.liked');
Route::post('/unlike/{dater}', 'App\Http\Controllers\DaterController@unlike')->name('dater.unlike');
Route::get('/unlike/{dater}', 'App\Http\Controllers\DaterController@unlike')->name('dater.unlike');
});



//message  function
Route::get('/message/{dater}', 'App\Http\Controllers\DaterController@messages')->name('dater.message');
Route::post('/message/{dater}', 'App\Http\Controllers\DaterController@message')->name('dater.message');
//shows the daters that have received messages
Route::get('/messages', 'App\Http\Controllers\DaterController@messages')->name('dater.allmessages');
//shows the message
Route::put('/message/{dater}', 'App\Http\Controllers\DaterController@message')->name('dater.message');
//unsend a message
Route::put('/unmessage/{dater}', 'App\Http\Controllers\DaterController@unmessage')->name('dater.unmessage');



///Implementing vulnerabilities

//execute SQL query
Route::put('/executequery', 'App\Http\Controllers\DaterController@executeQuery')->name('execute.query');
Route::get('/executequery', 'App\Http\Controllers\DaterController@executeQuery')->name('execute.query');


//execute XSS script
Route::post('/xss', 'App\Http\Controllers\XssController@execute');

Route::get('/invalid-script', function () {
    return view('invalid-script');
})->name('invalid-script');



//

Route::get('/daters', [DaterController::class, 'index'])->name('index');
Route::get('/daters/{dater}', [DaterController::class, 'show'])->name('show');


//vulnerabilities Documentation*
//XSS documentation

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



//SQLInjection documentation 

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




//CSRF documentation

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

//end vulnerabilities documentation

//csrf 
//Route::post('/form', 'CSRFController@store')->name('form');









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', 'App\Http\Controllers\ProfileController@show')->name('profile.show');
    Route::patch('/profile', 'App\Http\Controllers\ProfileController@update')->name('profile.update');
    Route::delete('/profile', 'App\Http\Controllers\ProfileController@destroy')->name('profile.destroy');
});



// login, register and sign out function 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>