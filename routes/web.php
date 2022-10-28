<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LyricController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', DashboardController::class)->name('dashboard');

Route::get('band/create', [BandController::class, 'create'])->name('bands.create');
Route::post('band/create', [BandController::class, 'store'])->name('bands.store');
Route::get('band', [BandController::class, 'show'])->name('bands.show');
Route::get('band/{band:slug}/edit', [BandController::class, 'edit'])->name('bands.edit');
Route::put('band/{band:slug}', [BandController::class, 'update'])->name('bands.update');
Route::delete('band/{band:slug}/delete', [BandController::class, 'destroy'])->name('bands.delete');

Route::get('album/create', [AlbumController::class, 'create'])->name('albums.create');
Route::post('album/create', [AlbumController::class, 'store'])->name('albums.store');
Route::get('album', [AlbumController::class, 'show'])->name('albums.show');
Route::get('album/{album:slug}/edit', [AlbumController::class, 'edit'])->name('albums.edit');
Route::put('album/{album:slug}/', [AlbumController::class, 'update'])->name('albums.update');
Route::delete('album/{album:slug}/delete', [AlbumController::class, 'destroy'])->name('albums.delete');
Route::get('album/get-album-by-{band}', [AlbumController::class, 'getAlbumsByBandId']);

Route::get('genre/create', [GenreController::class, 'create'])->name('genres.create');
Route::post('genre/create', [GenreController::class, 'store'])->name('genres.store');
Route::get('genre', [GenreController::class, 'show'])->name('genres.show');
Route::get('genre/{genre:slug}/edit', [GenreController::class, 'edit'])->name('genres.edit');
Route::put('genre/{genre:slug}', [GenreController::class, 'update'])->name('genres.update');
Route::delete('genre/{genre:slug}/delete', [GenreController::class, 'destroy'])->name('genres.delete');

Route::get('lyric/create', [LyricController::class, 'create'])->name('lyrics.create');
Route::post('lyric/create', [LyricController::class, 'store'])->name('lyrics.store');
Route::get('lyric', [LyricController::class, 'show'])->name('lyrics.show');
Route::get('lyric/{lyric:slug}/edit', [LyricController::class, 'edit'])->name('lyrics.edit');
Route::put('lyric/{lyric:slug}', [LyricController::class, 'update'])->name('lyrics.update');
Route::delete('lyric/{lyric:slug}/delete', [LyricController::class, 'destroy'])->name('lyrics.delete');
Route::get('lyric/{lyric:slug}/details', [LyricController::class, 'details'])->name('lyrics.details');
