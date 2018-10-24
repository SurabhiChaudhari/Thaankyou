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

Route::get('/', 'PagesController@home')->Name('home');
Route::get('/about', 'PagesController@about')->Name('about');
Route::get('/contact', 'PagesController@contact')->Name('contact');
Route::post('/contact', 'PagesController@store')->Name('contact.store');

Route::get('/thankyou/{name}','PagesController@thankyou')->name('thankyou');
    /*Route::post('/contact', function () {
    $data= request()->all();
    echo "Name: " . $data['name'] , '<br>';
    echo"Email: ". $data['email']. '<br>';
    echo"Body: ". $data['body'];
});

