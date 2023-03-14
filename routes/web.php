<?php

use Illuminate\Support\Facades\Route;

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
  Route::get('/test', function () {
    return view('test');
  });
  Route::get('/testing', function () {
    return view('test2');
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
