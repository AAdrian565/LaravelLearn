<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('home');
});

Route::get('/about', function () {
  return view('about');
});

Route::group(['prefix' => '/admin'], function () {
  Route::get('/login', function () {
    return redirect('/admin');
  });
  Route::get('/', function () {
    return view('adminLogin');
    /* return view('/adminLogin'); */
  });
  Route::get('/charts', function () {
    return view('adminCharts');
  });
  Route::get('/dashboard', function () {
    return view('adminDashboard');
  });
});


/* Route::get('/admin/test', function () { */
/*   return view('test'); */
/* }); */
/* Route::group(['prefix' => '/test', function () { */
/* }]); */
Route::get('/input/{param}', function ($param) {
  return "<h1>$param<h1>";
});

/* Route::get('/', ['../app/Http/Controllers/WebController.php'::class, 'index']); */

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
