<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
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

//Ilaria nuova rotta dettaglio(non è vero)
Route::get('/dettaglio/annunci/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement_show');

//Gabriele Nicola - Nuove Rotte revisore, accetta annuncio, rifiuta annuncio
//Rotta Home revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor_index');

// Rotta accetta annuncio
Route::patch('/accetta/annucio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor_accept_announcement');

// Rotta rifiuta annuncio
Route::patch('/rifiuta/annucio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor_reject_announcement');

// Rotta diventa revisore - Nicola
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('revisor_become');

// Rendi revisore un utente - Nicola
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('revisor_make');

//Gabriele
//Rotta Ricerca annuncio
Route::get('/ricerca/annuncio', [FrontController::class, 'searchAnnouncements'])->name('announcement_search');