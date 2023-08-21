<?php

use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AnnouncementController;

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

Route::get('/annunci',[AnnouncementController::class, 'indexAnnouncement'])->name('announcement_index');


//Gabriele nuove rotte per gli annunci e categorie
//Rotta per create
Route::get('/annunci/create', [AnnouncementController::class, 'create'])->middleware('auth')->name('announcement_create');

//Rotta categoria
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');

//Gabriele nuova rotta dettaglio
Route::get('/dettaglio/annunci/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement_show');

//Gabriele Nicola - Nuove Rotte revisore, accetta annuncio, rifiuta annuncio
//Rotta Home revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor_index');

// Rotta accetta annuncio
Route::patch('/accetta/annucio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor_accept_announcement');

// Rotta rifiuta annuncio
Route::patch('/rifiuta/annucio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor_reject_announcement');

// Rotta Vista annunci rifiutati
Route::get('/revisor/annunci/rifiutati', [RevisorController::class, 'reject'])->middleware('isRevisor')->name('revisor_reject');

// Rotta diventa revisore - Nicola
Route::post('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('revisor_become');

// Rendi revisore un utente - Nicola
Route::get('/rendi/revisore/{email}', [RevisorController::class, 'makeRevisor'])->name('revisor_make');

//Gabriele
//Rotta Ricerca annuncio
Route::get('/ricerca/annuncio', [FrontController::class, 'searchAnnouncements'])->name('announcement_search');

// Rotta Lavora con noi
Route::get('/lavora-con-noi', [PublicController::class, 'workWithUs'])->middleware('auth')->name('workWithUs');