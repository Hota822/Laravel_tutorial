<?php

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

// Route::get('/', function
// {
//     return view('static_pages/hello_world');
// });

$di = 'static_pages';

// for static pages

$to = '/home';

Route::view("/", "{$di}{$to}");

$to = '/help';
Route::view("{$to}", "{$di}{$to}");

$to = '/about';
Route::view("{$to}", "{$di}{$to}");

$to = '/contact';
Route::view("{$to}", "{$di}{$to}");

// for Users controller
Route::get('users/{user}', 'UsersController@show');
//  ->name('signup');

Auth::routes();
//illuminate/routing/router

