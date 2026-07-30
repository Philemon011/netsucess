<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LegalController;

// Page d'accueil
Route::get('/', [PageController::class, 'home'])->name('home');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');


Route::get('/mentions-legales', [LegalController::class, 'mentionsLegales'])->name('legal.mentions');
Route::get('/politique-de-confidentialite', [LegalController::class, 'confidentialite'])->name('legal.confidentialite');
Route::get('/politique-de-remboursement', [LegalController::class, 'remboursement'])->name('legal.remboursement');
Route::get('/cgu-cgv', [LegalController::class, 'cgu'])->name('legal.cgu');