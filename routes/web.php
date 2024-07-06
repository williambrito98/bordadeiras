<?php

use App\Http\Controllers\ApoiadoresController;
use App\Http\Controllers\BordadeiraController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EncontreUmaBordadeiraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NossaHistoriaController;
use App\Http\Controllers\NoticiasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/nossa-historia', [NossaHistoriaController::class, 'index'])->name('nossa-historia');
Route::get('/encontre-uma-bordadeira', [EncontreUmaBordadeiraController::class, 'index'])->name('encontre-uma-bordadeira');
Route::get('/apoiadores', [ApoiadoresController::class, 'index'])->name('apoiadores');
Route::get('/noticias', [NoticiasController::class, 'index'])->name('noticias');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/bordadeira/{bordadeira:nome}', [BordadeiraController::class, 'index'])->name('bordadeira');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::fallback(function () {
    return redirect()->route('home');
});
