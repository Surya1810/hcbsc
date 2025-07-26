<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'landing'])->name('landing');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/informasi/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/informasi/agenda-kegiatan', [PageController::class, 'agenda'])->name('agenda');
Route::get('/keanggotaan/pendaftaran', [PageController::class, 'pendaftaran_keanggotaan'])->name('keanggotaan.pendaftaran');
Route::get('/keanggotaan/cek', [PageController::class, 'cek_keanggotaan'])->name('keanggotaan.cek');
Route::get('/keanggotaan/atribut', [PageController::class, 'atribut'])->name('keanggotaan.atribut');
Route::get('/hubungi-kami', [PageController::class, 'contact'])->name('contact');

Auth::routes();

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::resource('berita', PostController::class);
        Route::resource('agenda', AgendaController::class);
        Route::resource('anggota', AnggotaController::class);
    }
);
