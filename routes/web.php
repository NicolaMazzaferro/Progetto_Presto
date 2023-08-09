<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Models\Announcement;

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

Route::get('/', [FrontController::class, 'home'])->name('home');
// rotta per index

Route::get('/annunci',[AnnouncementController::class, 'index'])->name('announcement_index');


// Gabriele nuove rotte per gli annunci e categorie
//Rotta per create
Route::get('/annunci/create', [AnnouncementController::class, 'create'])->middleware('auth')->name('announcement_create');

//Rotta categoria
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');