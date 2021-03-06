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

// for signup, login, logout, password_reset
Auth::routes(['verify' => true]);

// for Users controller
//Route::get('users/{user}', 'UsersController@show');
//  ->name('signup');
Route::get('users/{id}/followers', 'UsersController@followers');
Route::get('users/{id}/following', 'UsersController@following');
Route::resource('users', 'UsersController')
    ->except(['create', 'store'])
    ->middleware('verified');

Route::resource('microposts', 'MicropostsController')
    ->only(['store', 'destroy'])
    ->middleware('verified');

Route::resource('relationship', 'RelationshipController')
    ->only(['store', 'destroy'])
    ->middleware('verified');
