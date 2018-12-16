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

Route::get('/', 'PagesController@index');
Route::get('/register', 'PagesController@register');

Route::get('/students/', 'StudentsController@index')->name('students');
Route::get('/students/changePassword', 'StudentsController@changePassword');
Route::get('/students/viewSubject', 'StudentsController@viewSubject');


// Route::get('/about', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('pages.login');
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This is user ' . $id . ' is ' . $name;
// });