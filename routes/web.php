<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', 'App\Http\Controllers\Controller@login' );

Route::redirect('google', 'https://www.google.com/');

Route::view('welcome', 'admin.welcomeAdmin' ,['name'=>'Saif'] );

Route::get('table', function () {
    return view('site.table');
});

Route::get('app', function () {
    return view('site.app');
});