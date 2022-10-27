<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [PagesController::class, 'index'])->name('hello');

Route::get('/profile',[PagesController::class, 'profile'])->name('profile');


Route::get('/studentList',[StudentController::class, 'studentList'])->name('studentList');
Route::get('/studentEdit/{name}/{id}',[StudentController::class, 'studentEdit'])->name('studentEdit');

Route::get('/studentRegistration',[StudentController::class, 'studentRegistration'])->name('studentRegistration');
Route::post('/studentRegistration',[StudentController::class, 'studentRegistrationSubmitted'])->name('studentRegistration');

Route::get('/login',[StudentController::class, 'login'])->name('login');
Route::post('/login',[StudentController::class, 'loginSubmitted'])->name('login');