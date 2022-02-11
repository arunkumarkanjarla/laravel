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
// Route::get('/', function () {return view('Login.home');});

Route::get('/users', function () {
    return view('users');
});
Route::get('/students','StudentController@index')->name('student.index');

Route::post('/studentadd','StudentController@store')->name('student.add');

Route::get('/students/{id}','StudentController@getStudentById')->name('student.getbyid');

Route::put('/studentedit','StudentController@updataStudent')->name('student.update');

Route::delete('/students/{id}','StudentController@deleteStudent')->name('student.delete');

Route::get('gfg', function () {return view('gfg');});

Route::get('login', function () {return view('Login.login');});

Route::get('/', function () {return view('Homepage.index');});



// Route::get('/', function () {
//     return view('logincontroller');
// });
