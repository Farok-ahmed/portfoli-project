<?php

use App\Http\Controllers\FrontendController;
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



Route::get('/',[FrontendController::class,'index'])->name('homepage');

Route::get('/about',[FrontendController::class,'about'])->name('about');

Route::get('/services',[FrontendController::class,'services'])->name('services');

Route::get('/project',[FrontendController::class,'project'])->name('project');

Route::get('/blog',[FrontendController::class,'blog'])->name('blog');

Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
