<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard;
use App\Livewire\Kelembagaan;
use App\Livewire\Kepegawaian;
use App\Livewire\Pemberdayaan;
use App\Livewire\Pengawasan;
use App\Livewire\Pengembangan;
use App\Livewire\Sekretariat;
use App\Livewire\SuratKeluar;
use App\Livewire\SuratMasuk;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/kelembagaan', Kelembagaan::class)->name('kelembagaan');
    Route::get('/pengembangan', Pengembangan::class)->name('pengembangan');
    Route::get('/kepegawaian', Kepegawaian::class)->name('kepegawaian');
    Route::get('/pemberdayaan', Pemberdayaan::class)->name('pemberdayaan');
    Route::get('/pengawasan', Pengawasan::class)->name('pengawasan');
    Route::get('/sekretariat', Sekretariat::class)->name('sekretariat');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
