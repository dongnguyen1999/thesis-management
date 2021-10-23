<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThesisController;

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
Route::get('/login', [HomeController::class, 'login']);
//student
Route::get('/student', [HomeController::class, 'student']);
    Route::get('/student/dkluanvan', [HomeController::class, 'dkluanvan']);
// lester
Route::get('/lecturers', [HomeController::class, 'lecturers']);
    Route::get('/lecturers/dsdetai', [HomeController::class, 'dsdetai']);
        Route::get('/lecturers/dsdetai/themdetai', [HomeController::class, 'themdetai']);
        Route::get('/lecturers/dsdetai/suadetai', [HomeController::class, 'suadetai']);
    Route::get(' /dssinhviendangky', [HomeController::class, 'dssinhviendangky']);


//Test routes
Route::get('/insertbomon', [ThesisController::class, 'insertBoMon']);
Route::get('/bomon/list', [ThesisController::class, 'listBoMon']);
Route::get('/bomon/insert', [ThesisController::class, 'insertBoMonUseGet']);
Route::get('/bomon/update', [ThesisController::class, 'updateBoMonUseGet']);
Route::get('/bomon/{id}', [ThesisController::class, 'findId']);
Route::get('/student', [ThesisController::class, 'listBoMon']);
Route::get('/lophoc/{id}', [ThesisController::class, 'findLopHoc']);

// Route::get('/hello', [HomeController::class, 'hello']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/login', [HomeController::class, 'login']);
// Route::get('/student{id}', [HomeController::class, 'student']);
//     Route::get('/student/dkluanvan', [HomeController::class, 'dkluanvan']);
// Route::get('/lecturers', [HomeController::class, 'lecturers']);
//     Route::get('/lecturers/dsdetai', [HomeController::class, 'dsdetai']);
//         Route::get('/themdetai', [HomeController::class, 'themdetai']);
//         Route::get('/suadetai', [HomeController::class, 'suadetai']);
//     Route::get('/dssinhviendangky', [HomeController::class, 'dssinhviendangky']);
