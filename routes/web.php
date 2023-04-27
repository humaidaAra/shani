<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('staff', StaffController::class)->names('admin.staff');
    Route::resource('college', CollegeInstitueController::class)->names('admin.college');
    Route::resource('department', DepartmentCollegeController::class)->names('admin.department');
    Route::resource('stage', StageCollegeControllerController::class)->names('admin.stage');
    Route::resource('lecture', LectureController::class)->names('admin.lecture');

    Route::get('/', [HomeController::class, 'index']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store']);
});
