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
Route::get('/informasi/galeri', [PageController::class, 'galeri'])->name('galeri');
Route::get('/informasi/berita/{slug}', [PageController::class, 'detail_berita'])->name('detail.berita');
Route::get('/informasi/agenda-kegiatan', [PageController::class, 'agenda'])->name('agenda');
Route::get('/keanggotaan/pendaftaran', [PageController::class, 'pendaftaran_keanggotaan'])->name('keanggotaan.pendaftaran');
Route::get('/keanggotaan/cek', [PageController::class, 'cek_keanggotaan'])->name('keanggotaan.cek');
Route::get('/keanggotaan/cek/hasil', [PageController::class, 'cek_keanggotaan_hasil'])->name('keanggotaan.hasil');
Route::get('/keanggotaan/atribut', [PageController::class, 'atribut'])->name('keanggotaan.atribut');
Route::get('/hubungi-kami', [PageController::class, 'contact'])->name('contact');

Route::patch('/anggota/{id}/approve', [AnggotaController::class, 'approve'])->name('anggota.approve');
Route::patch('/anggota/{id}/reject', [AnggotaController::class, 'reject'])->name('anggota.reject');
Route::resource('anggota', AnggotaController::class);

Auth::routes();

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::resource('berita', PostController::class);
        Route::resource('agenda', AgendaController::class);
    }
);
