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

// //URL:http://127.0.0.1:8000/
// Route::get('/', function () {
//     return view('welcome');
// });

//URL:http://127.0.0.1:8000
Route::get('/', function () {
    return view('home'); //home.blade.php
});

//URL:http://127.0.0.1:8000/about
Route::get('/about', function () {
    return view('about'); //about.blade.php
});

//URL:http://127.0.0.1:8000/people
Route::get('/people', function () {
    return view('people'); //people.blade.php
});

//URL:http://127.0.0.1:8000/annoucement
Route::get('/annoucement', function () {
    return view('annoucement'); //annoucement.blade.php
});

//URL:http://127.0.0.1:8000/contact
Route::get('/contact', function () {
    return view('contact'); //contact.blade.php
});

//URL:http://127.0.0.1:8000/signin
Route::get('/signin', function () {
    return view('signin'); //signin.blade.php
});

//URL:http://127.0.0.1:8000/register
Route::get('/register', function () {
    return view('register'); //register.blade.php
});

//URL:http://127.0.0.1:8000/register
Route::get('/register', function () {
    return view('register'); //register.blade.php
});

//URL:http://127.0.0.1:8000/register
Route::get('/register', function () {
    return view('register'); //register.blade.php
});

