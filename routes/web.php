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

// Route::get('/', function ()
// {
//     return view('static_pages/hello_world');
// });

$di = 'static_pages';
$to = $di . '/home';

Route::view("/","{$to}");

$to = $di . '/help';
Route::view("/{$to}","{$to}");

$to = $di . '/about';
Route::view("/{$to}","{$to}");

$to = $di . '/contact';
Route::view("/{$to}","{$to}");

