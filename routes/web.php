<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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



Auth::routes();

/* Funzioni utente loggato */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/announcement.new', [HomeController::class, 'newAnnouncement'])->name('announcement.new');
Route::post('/announcement.create', [HomeController::class, 'createAnnouncement'])->name('announcement.create');
Route::post('/announcement/images/upload', [HomeController::class, 'uploadImage'])->name('announcement.images.upload');
Route::delete('/announcement/images/remove', [HomeController::class, 'removeImage'])->name('announcement.images.remove');
Route::get('/announcement/images',[HomeController::class, 'getImages'])->name('announcement.images');
Route::get('/contact/buyer',[HomeController::class, 'buyerContact'])->name('buyer.contact');
Route::post('contact.store',[HomeController::class, 'buyerStore'])->name('buyer.store');
Route::get('/auth/profile',[HomeController::class, 'showProfile'])->name('auth.profile');
Route::get('/auth/announcements',[HomeController::class, 'showUserAnnouncements'])->name('auth.announcements');


/* Funzioni pubbliche */
Route::get('/', [PublicController::class, 'index'])->name('welcome');
Route::get('/announcement/all',[PublicController::class, 'allAnnouncements'])->name('announcement.all');
Route::get('/announcement/show/{announcement}',[PublicController::class, 'show'])->name('announcement.show');
Route::get('/category/{name}/{id}/announcements', [PublicController::class, 'announcementsByCategory'])->name('public.announcements.category');
Route::post('/search',[PublicController::class, 'search'])->name('search');
Route::post('/locale/{locale}', [PublicController::class, 'locale'])->name('locale');

//Revisor area
Route::get('/revisor/home',[RevisorController::class,'index'])->name('revisor.home');
Route::post('/revisor/announcement/{id}/accept',[RevisorController::class,'accept'])->name('revisor.accept');
Route::post('/revisor/announcement/{id}/reject',[RevisorController::class,'reject'])->name('revisor.reject');
Route::get('/revisor/create',[HomeController::class, 'revisorCreate'])->name('revisor.create');
Route::post('/revisor/store', [HomeController::class, 'revisorStore'])->name('revisor.store');




