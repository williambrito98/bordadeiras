<?php

use App\Http\Controllers\Admin\AdminBordadeirasController;
use App\Http\Controllers\Admin\AdminContatoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EstadosController;
use App\Http\Controllers\ApoiadoresController;
use App\Http\Controllers\BordadeiraController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EncontreUmaBordadeiraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NossaHistoriaController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/nossa-historia', [NossaHistoriaController::class, 'index'])->name('nossa-historia');
Route::get('/encontre-uma-bordadeira', [EncontreUmaBordadeiraController::class, 'index'])->name('encontre-uma-bordadeira');
Route::get('/apoiadores', [ApoiadoresController::class, 'index'])->name('apoiadores');
Route::get('/noticias', [NoticiasController::class, 'index'])->name('noticias');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/bordadeira/{bordadeira:nome}', [BordadeiraController::class, 'index'])->name('bordadeira');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('perfil.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('perfil.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('perfil.destroy');

    Route::resource('/bordadeiras', AdminBordadeirasController::class)->names([
        'create' => 'admin.bordadeiras.create',
        'index' => 'admin.bordadeiras.index',
        'store' => 'admin.bordadeiras.store',
        'show' => 'admin.bordadeiras.show',
        'edit' => 'admin.bordadeiras.edit',
        'update' => 'admin.bordadeiras.update',
        'destroy' => 'admin.bordadeiras.destroy'
    ]);
    Route::post('/bordadeiras/{bordadeira}/thumbnail/upload', [AdminBordadeirasController::class, 'uploadThumbail'])->name('admin.bordadeiras.thumbnail.upload');
    Route::post('/bordadeiras/{bordadeira}/images/upload', [AdminBordadeirasController::class, 'uploadImages'])->name('admin.bordadeiras.images.upload');

    Route::post('/bordadeiras/{bordadeira}/image/delete', [AdminBordadeirasController::class, 'deleteImage'])->name('admin.bordadeiras.images.delete');
    Route::post('/bordadeiras/{bordadeira}/thumbnail/delete', [AdminBordadeirasController::class, 'deleteThumbnail'])->name('admin.bordadeiras.thumbnail.delete');

    Route::post('/bordadeiras/{bordadeira}/banner/upload', [AdminBordadeirasController::class, 'uploadBanner'])->name('admin.bordadeiras.banner.upload');
    Route::post('/bordadeiras/{bordadeira}/banner/delete', [AdminBordadeirasController::class, 'deleteBanner'])->name('admin.bordadeiras.banner.delete');

    Route::get('/estado/{estado}/cidades', [EstadosController::class, 'getCidades'])->name('admin.estado.cidades');


    Route::get('/contato', [AdminContatoController::class, 'index'])->name('admin.contato.index');
    Route::put('/contato', [AdminContatoController::class, 'update'])->name('admin.contato.update');

    Route::fallback(function () {
        return redirect()->route('admin');
    });


});

require __DIR__ . '/auth.php';


Route::fallback(function () {
    return redirect()->route('home');
});
