<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/videos', [FrontendController::class, 'video'])->name('video-page');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/dashboard', [FrontendController::class, 'dashboard'])->name('dashboard');
Route::get('/upload', [FrontendController::class, 'upload'])->name('upload');
Route::post('/images/upload', [FrontendController::class, 'upload_image'])->name('upload.image');


//backend routes
Route::get('/admin',[BackendController::class,'index'])->name('dashboard');

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logoutr');


require __DIR__.'/auth.php';
