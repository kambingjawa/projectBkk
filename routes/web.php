<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfoAlumniController;
use App\Http\Controllers\ProfileBkkController;
use App\Http\Controllers\InfoLowonganController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class,'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::get('/menu',[DashboardController::class, 'menu'])->name('menu');

route::get('/infoalumni',[InfoAlumniController::class, 'infoalumni'])->name('infoalumni');

route::get('/infolowongan',[InfoLowonganController::class, 'infolowongan'])->name('infolowongan');

route::get('/profilebkk',[ProfileBkkController::class, 'profilebkk'])->name('profilebkk');

require __DIR__.'/auth.php';
