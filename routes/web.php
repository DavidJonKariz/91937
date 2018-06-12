<?php
use App\student;
use App\fee;
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

//homepage
Route::get('/', function () {
    return view('91937.home');
});

//student Register page
Route::get('/student', function () {
    return view('91937.student');
});

//fee Payment page
Route::get('/fees', function () {
    return view('91937.fees');
});

//Sign In page
Route::get('/signin', function () {
    return view('91937.sign_in');
});

//student Details records
Route::get('/students/records', function () {
    return view('91937.student_details');
});


//All Student Fees records
Route::get('/allstudents/fees','student_controller@showstudents');

//All Student Fees records
//Route::get('/totalfees/students','fee_controller@showfees');

//student info register
Route::post('/student/student_register','student_controller@student_register');

//fee info saved
Route::post('/fees/fee_save','fee_controller@fee_save');

//Login process
Route::post('/student/login','student_controller@student_login');