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

Route::get('/about-us', function() {
  return view('about');
});

Route::get('/admissions', function() {
  return view('admin.index');
});

Route::get('/system/enroll-student', 'StudentCtrl@enroll');

Route::post('/system/enroll-student', 'StudentCtrl@postEnroll');

Route::get('/system/students/view', 'StudentCtrl@viewStudents');
