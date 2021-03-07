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
//
//Route::get('/', function () {
//    return view('loginpage');
//});


Route::get('/login', 'UserController@index');
Route::post('/login', 'UserController@store');
Route::get('/send-mail', 'UserController@mail');


//Route::get('/send-mail', function () {
//
//    $details = [
//        'title' => 'Mail from ItSolutionStuff.com',
//        'body' => 'This is for testing email using smtp'
//    ];
//
//    \Mail::to('mohammad.j.yacoub@gmail.com')->send(new \App\Mail\MyTestMail($details));
//
//    dd("Email is Sent.");
//});
