<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//back
Route::resource('/admin/avatar', AvatarController::class)->middleware(['auth', 'isAdmin']);

Route::resource('/admin/user', UserController::class)->middleware(['auth']);

Route::get('/admin/galerie', [GalerieController::class, 'index'])->name('galerie.index')->middleware(['auth']);
Route::get('/admin/image/create', [GalerieController::class, 'create'])->name('galerie.create')->middleware(['auth' ]);
Route::post('/admin/image/store', [GalerieController::class, 'store'])->name('galerie.store')->middleware(['auth' ]);
Route::get('/admin/image/download/{id}', [GalerieController::class, 'download'])->name('galerie.download')->middleware(['auth' ]);


Route::resource('/admin/categorie', CategorieController::class)->middleware(['auth', 'isAdmin']);

