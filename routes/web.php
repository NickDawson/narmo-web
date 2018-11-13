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


Route::get('/about-us', function () {
    return view('layouts.aboutus');
});

Route::get('/values', function () {
    return view('layouts.values');
});

Route::get('/leadership', function () {
    return view('layouts.leadership');
});

Route::get('/equipments', function () {
    return view('layouts.equipments');
});

Route::get('/services', function () {
    return view('layouts.services');
});

Route::get('/projects', function () {
    return view('layouts.projects');
});

Route::get('/ongoing-projects', function () {
    return view('layouts.ongoingprojects');
});

Route::get('/gallery', function () {
    return view('layouts.gallery');
});

//Route::get('/contacts', function () {
  // return view('layouts.contacts');
//});

Route::get('/contacts', [
    'uses' => 'ContactMessageController@create'
]);

Route::post('/contacts', [
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store'
]);