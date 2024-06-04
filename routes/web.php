<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\RicetteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/ricette', [RicetteController::class, 'ricette'])->name('ricette');

Route::get('/ricette/{id}', [RicetteController::class, 'ricette_dettaglio'])->name('ricette.detail');
