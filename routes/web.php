<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudController;
use App\Http\Controllers\TeacherController;
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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/StudTable', function () {
    return view('StudTable');
});

Route::get('/TeacherTable', function () {
    return view('TeacherTable');
});

Route::get('/CreateStud', function () {
    return view('CreateStud');
});

Route::get('/CreateTeacher', function () {
    return view('CreateTeacher');
});

Route::get('/StudTable',[StudController::class, 'Stud']);

Route::get('/TeacherTable',[TeacherController::class, 'Teacher']);

Route::post('/CreateStud',[StudController::class, 'CreateStud'])->name('StudTable');

Route::post('/CreateTeacher',[TeacherController::class, 'CreateTeacher'])->name('TeacherTable');

Route::get('delete/{id}',[StudController::class, 'destroy']);

Route::get('delete/{id}',[TeacherController::class, 'destroy']);