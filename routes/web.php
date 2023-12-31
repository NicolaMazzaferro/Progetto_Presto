<?php

use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\NewsletterController;
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


//Gabriele nuove rotte per gli annunci e categorie
// Rotte CRUD - Nicola

Route::get('/annunci/create', [AnnouncementController::class, 'create'])->middleware('auth')->name('announcement_create');
Route::get('/annunci',[AnnouncementController::class, 'indexAnnouncement'])->name('announcement_index');
Route::get('/annunci/edit/{announcement}', [AnnouncementController::class, 'edit'])->middleware('auth')->name('announcement_edit');
Route::put('/annuncio/modificato/{announcement}', [AnnouncementController::class, 'update'])->middleware('auth')->name('announcement_update');
Route::delete('/annuncio/eliminato/{announcement}', [AnnouncementController::class, 'destroy'])->middleware('auth')->name('announcement_delete');

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

// Rotta Vista annunci rifiutati - Nicola
Route::get('/revisor/annunci/rifiutati', [RevisorController::class, 'reject'])->middleware('isRevisor')->name('revisor_reject');

// Rotta Vista annunci accettati - Nicola
Route::get('/revisor/annunci/accettati', [RevisorController::class, 'accept'])->middleware('isRevisor')->name('revisor_accept');

// Rotta diventa revisore - Nicola
Route::post('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('revisor_become');

// Rendi revisore un utente - Nicola
Route::get('/rendi/revisore/{email}', [RevisorController::class, 'makeRevisor'])->name('revisor_make');

//Gabriele
//Rotta Ricerca annuncio
Route::get('/ricerca/annuncio', [FrontController::class, 'searchAnnouncements'])->name('announcement_search');

// Rotta Lavora con noi - Nicola
Route::get('/lavora-con-noi', [PublicController::class, 'workWithUs'])->middleware('auth')->name('workWithUs');

// Rotta Newsletter Conferma - Nicola
Route::post('/newsletter/confirmation', [NewsletterController::class, 'subscribe'])->name('newsletter_subscribe');

// Rotta Newsletter - Nicola
Route::post('/newsletter', [NewsletterController::class, 'newsletter'])->name('newsletter');

// Rotta vista newsletter - Nicola
Route::get('/newsletter/index', [NewsletterController::class, 'newsletterIndex'])->middleware('auth')->name('newsletter_index');

// Rotta Lingue - Nicola
Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('set_language_locale');

// Rotta Profilo
Route::get('/profilo', [PublicController::class, 'profile'])->middleware('auth')->name('profile_index');

// Rotta Modifica Annunci
Route::get('/profilo/annunci/modifica', [AnnouncementController::class, 'indexEditAnnouncement'])->middleware('auth')->name('index_edit_announcement');

// Rotta Carrello
Route::get('/carrello', [CartController::class, 'cartIndex'])->name('cart_index');

// Rotta Aggiungi al carrello
Route::post('/carrello/aggiungi/{announcementId}', [CartController::class, 'addToCart'])->name('add_to_cart');

// Rotta Checkout Carrello
Route::post('/carrello/checkout', [CartController::class, 'checkout'])->middleware('auth')->name('cart_checkout');

// Rotta Pagamento
Route::get('/carrello/pagamento', [CartController::class, 'payment'])->middleware('auth')->name('cart_payment');

// Rotta Svuota Carrello
Route::post('/carrello/svuota', [CartController::class, 'cartClear'])->name('cart_clear');

// Rotta Elimina prodotto dal carrello
Route::post('/carrello/rimuovi/quantita/{announcementId}', [CartController::class, 'cartAnnouncementClear'])->name('cart_announcement_clear');

// Rotta Aumenta quantità
Route::post('/carrello/aggiungi/quantita/{announcementId}', [CartController::class, 'cartAnnouncementAdd'])->name('cart_announcement_add');
