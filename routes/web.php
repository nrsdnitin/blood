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
    return view('welcome');
});
Route::get('/search/{blood_group?}', 'HomeSearchController@index')->name('search');
Route::get('/getLocationByIP/{visitorIP?}', 'HomeSearchController@getLocationByIP')->name('visitorIP');
/*Route::post('/customer/{name?}', function ($name = 'John') {
    return $name;
});*/
/*Route::post('/search', function () {
    return view('home');
})->name('search');
*/
Route::post('/search','HomeSearchController@index')->name('search');
Auth::routes();

Route::post('/updateProfile/{id?}','HomeController@updateProfile')->name('updateProfile');
Route::post('/updateProfilePassword/{id?}','HomeController@updateProfilePassword')->name('updateProfilePassword');
Route::post('/HomePost/{id?}','HomeController@HomePost')->name('HomePost');

Route::get('/editProfile','HomeController@editProfile')->name('editProfile');

Route::get('/home', 'HomeController@index')->name('home');
