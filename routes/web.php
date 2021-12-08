<?php

use App\Http\Controllers\DeTaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThesisController;
use App\Http\Controllers\TestFormController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/hello', [HomeController::class, 'hello'])->middleware('requireLogin');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('postLogin');
// Route::post('/postLogout', [AuthController::class, 'postLogout'])->name('postLogout');
Route::get('/logout', [AuthController::class, 'postLogout'])->name('postLogout');

//student
Route::get('/student', [StudentController::class, 'student'])->middleware('requireLogin');
    Route::get('/student/dkluanvan', [StudentController::class, 'dkluanvan']);
        Route::get('/student/dkluanvan/dkdetai/{nd_id}', [StudentController::class, 'dkdetai'])->name('student.dkluanvan.dkdetai');
    // Route::get('/student/dkluanvan', [HomeController::class, 'dkluanvan']);
    Route::get('/student/dsgiangvienhuongdan', [StudentController::class, 'dsgiangvienhuongdan']);

// lester
Route::get('/lecturers', [LecturerController::class, 'lecturers']);
// Route::get('/lecturers/dssinhviendangky', [HomeController::class, 'dssinhviendangky']);
    Route::get('/lecturers/dsdetai', [LecturerController::class, 'dsdetai']);
        Route::get('/lecturers/dsdetai/themdetai', [LecturerController::class, 'themdetai']);
        Route::get('/lecturers/dsdetai/suadetai', [LecturerController::class, 'suadetai']);
    Route::get('/dssinhviendangky', [LecturerController::class, 'dssinhviendangky']);
    // Route::get('/lecturers/dssinhviendangky', [HomeController::class, 'dssinhviendangky']);


//Test routes
Route::get('/insertbomon', [ThesisController::class, 'insertBoMon']);
Route::get('/bomon/list', [ThesisController::class, 'listBoMon']);
Route::get('/bomon/insert', [ThesisController::class, 'insertBoMonUseGet']);
Route::get('/bomon/update', [ThesisController::class, 'updateBoMonUseGet']);
Route::get('/bomon/{id}', [ThesisController::class, 'findId']);
// Route::get('/student', [ThesisController::class, 'listBoMon']);
Route::get('/lophoc/{id}', [ThesisController::class, 'findLopHoc']);

// Route::get('/formtestthemdetai', [ThesisController::class, 'DeTai']);


// Route::post('/register', [TestFormController::class, 'testPost']);
Route::post('/form/post', [TestFormController::class, 'testPost']);
Route::get('/form/get', [TestFormController::class, 'testGet']);
Route::get('/form', [TestFormController::class, 'formView']);
// Route::post('/register', [TestFormController::class, 'testPost']);
Route::get('/formtestthemdetai', [DeTaiController::class, 'themDetai']);

// Route::get('/hello', [HomeController::class, 'hello']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/login', [aHomeController::class, 'login']);
// Route::get('/student{id}', [HomeController::class, 'student']);
//     Route::get('/student/dkluanvan', [HomeController::class, 'dkluanvan']);
// Route::get('/lecturers', [HomeController::class, 'lecturers']);
//     Route::get('/lecturers/dsdetai', [HomeController::class, 'dsdetai']);
//         Route::get('/themdetai', [HomeController::class, 'themdetai']);
//         Route::get('/suadetai', [HomeController::class, 'suadetai']);
//     Route::get('/dssinhviendangky', [HomeController::class, 'dssinhviendangky']);
