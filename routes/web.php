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

Route::get('welcome', function () {
    return view('welcome');
});


Route::get('', function () {
    return view('index');
});

Route::get('test', function () {
    return view('layouts.adminLTE');
});

// ########################### SubJect ##########################
Route::get('/subject','SubjectController@index');
Route::get('/subject/insert','SubjectController@create');
Route::post('/subject/insert','SubjectController@store');
Route::get('/subject/edit/{id}','SubjectController@edit');
Route::post('/subject/edit/{id}','SubjectController@update');
Route::get('/subject/delete/{id}','SubjectController@destroy');

Route::get('/subject/viewsubject/{id}','SubjectController@viewSubject');
Route::get('/subject/viewclass/{id}','SubjectController@viewClass');


// ########################### Teacher ##########################
Route::get('/teacher','TeacherController@index');
Route::get('/teacher/insert','TeacherController@create');
Route::post('/teacher/insert','TeacherController@store');
Route::get('/teacher/edit/{id}','TeacherController@edit');
Route::post('/teacher/edit/{id}','TeacherController@update');
Route::get('/teacher/delete/{id}','TeacherController@destroy');



Route::get('/teacher/viewsubject/{id}','TeacherController@viewSubject');
Route::get('/teacher/viewclass/{id}','TeacherController@viewClass');

Route::get('teacher/addsubject/{id}','TeacherController@addSubject');
Route::post('teacher/addsubject/{id}','TeacherController@addSubjectStore');

// ########################### Student ##########################
Route::get('/student','StudentController@index');
Route::get('/student/insert','StudentController@create');
Route::post('/student/insert','StudentController@store');
Route::get('/student/edit/{id}','StudentController@edit');
Route::post('/student/edit/{id}','StudentController@update');
Route::get('/student/delete/{id}','StudentController@destroy');

Route::get('/student/summary/{id}','StudentController@summary');
Route::get('/student/drop/{stu_idid}/{class_id}','StudentController@dropSubject');

Route::get('/student/addsubject/{id}','StudentController@addSubject');
Route::post('/student/addsubject/{id}','StudentController@addSubjectStore');

// ########################### Classes ##########################
Route::get('/classes','ClassesController@index');
Route::get('/classes/insert','ClassesController@create');
Route::post('/classes/insert','ClassesController@store');
Route::get('/classes/edit/{id}','ClassesController@edit');
Route::post('/classes/edit/{id}','ClassesController@update');
Route::get('/classes/delete/{id}','ClassesController@destroy');

Route::get('/classes/summary/{id}','ClassesController@summary');


###########################################################################

Route::get('/message','MessageController@index');
Route::post('/api/insert','MessageController@store');
Route::get('/api/get/message','MessageController@show');


#############################################################################
Route::get('login','LoginController@index');
Route::post('login','LoginController@index2');
Route::get('register','LoginController@create');
Route::post('register','LoginController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout','HomeController@logout');


Route::get('webapi/teacher','TeacherController@showTeacherView');


