<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrolmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

Route::resource('/students',StudentController::class);

Route::resource('/teachers',TeacherController::class);

Route::resource('/courses',CourseController::class);

Route::resource('/batches',BatchController::class);

Route::resource('/enrolments',EnrolmentController::class);

Route::resource('/payments',PaymentController::class);

Route::get('report/report1/{pid}',[ReportController::class,'report1']);

