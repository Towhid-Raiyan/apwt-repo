<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/index', [PagesController::class, 'index'])->name('home');
// Route::get('/products',[PagesController::class, 'service'])->name('service');
// Route::get('/pages',[PagesController::class, 'ourTeams'])->name('ourTeams');
Route::get('/products',[PagesController::class, 'service'])->name('service');
Route::get('/pages',[PagesController::class, 'ourTeams'])->name('ourTeams');
// Route::get('/pages',[PagesController::class, 'contact'])->name('contact');
// Route::get('/pages/aboutUs',[PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('/index', [PagesController::class, 'index'])->name('home');
Route::get('/products/services',[PagesController::class, 'services'])->name('services');
Route::get('/pages/ourTeams',[PagesController::class, 'ourteams'])->name('ourteams');
Route::get('/pages/contactus',[PagesController::class, 'contactus'])->name('contactus');
Route::get('/pages/aboutUs',[PagesController::class, 'aboutUs'])->name('aboutUs');
//
