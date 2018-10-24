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

Route::get('/', function () {
    return view('pages.index');
})->Name('home');
Route::get('/about', function () {
    return view('pages.about');
})->Name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})->Name('contact');

    /*Route::post('/contact', function () {
    $data= request()->all();
    echo "Name: " . $data['name'] , '<br>';
    echo"Email: ". $data['email']. '<br>';
    echo"Body: ". $data['body'];
});

