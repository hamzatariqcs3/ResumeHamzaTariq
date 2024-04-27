<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeController;
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
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

 
Route::get('/resume', [ResumeController::class,'resume'])->name('resume');
 
 

Route::get('/project', function () {
    return view('projects');
})->name('projects');



Route::post('/submit-form', [ContactController::class, 'sendContactEmail'])->name('contactForm');
Route::get('/example', [ContactController::class, 'resume']);