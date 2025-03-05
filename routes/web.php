<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfoAlumniController;
use App\Http\Controllers\ProfileBkkController;
use App\Http\Controllers\InfoLowonganController;
use App\Http\Controllers\FormAlumniController;
use App\Http\Controllers\StatistikController;


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

route::get('/infolowongan',[InfoLowonganController::class, 'infolowongan'])->name('infolowongan');

route::get('/profilebkk',[ProfileBkkController::class, 'profilebkk'])->name('profilebkk');

route::get('/formalumni',[FormAlumniController::class, 'formalumni'])->name('formalumni');

Route::post('/formalumni/store', [FormAlumniController::class, 'store'])->name('formalumni.store');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

route::get('statistik',[StatistikController::class, 'statistik'])->name('statistik');

Route::get('/alumni', [FormAlumniController::class, 'index'])->name('alumni.index');
Route::get('/alumni/{id}/edit', [FormAlumniController::class, 'edit'])->name('alumni.edit');
Route::put('/formalumni/{id}', [FormAlumniController::class, 'update'])->name('formalumni.update');
Route::delete('/alumni/{id}', [FormAlumniController::class, 'destroy'])->name('alumni.destroy');


Route::get('/lowongan', [InfoLowonganController::class, 'index'])->name('lowongan.index');
Route::get('/lowongan/create', [InfoLowonganController::class, 'create'])->name('lowongan.create');
Route::post('/lowongan', [InfoLowonganController::class, 'store'])->name('lowongan.store');
Route::get('/lowongan/{id}/edit', [InfoLowonganController::class, 'edit'])->name('lowongan.edit');
Route::put('/lowongan/{id}', [InfoLowonganController::class, 'update'])->name('lowongan.update');
Route::delete('/lowongan/{id}', [InfoLowonganController::class, 'destroy'])->name('lowongan.destroy');
Route::delete('/lowongan/{lowongan}', [InfoLowonganController::class, 'destroy'])->name('lowongan.destroy');
Route::get('/lowongan/{id}', [InfoLowonganController::class, 'show'])->name('lowongan.show');


Route::get('/info-alumni', [InfoAlumniController::class, 'index'])->name('info.alumni');
Route::get('/infoalumni', [InfoAlumniController::class, 'index'])->name('infoalumni.index');
Route::get('/infoalumni/create', [InfoAlumniController::class, 'create'])->name('infoalumni.create');
Route::post('/infoalumni', [InfoAlumniController::class, 'store'])->name('infoalumni.store');
Route::get('/infoalumni/{id}/edit', [InfoAlumniController::class, 'edit'])->name('infoalumni.edit');
Route::put('/infoalumni/{id}', [InfoAlumniController::class, 'update'])->name('infoalumni.update');
Route::delete('/infoalumni/{id}', [InfoAlumniController::class, 'destroy'])->name('infoalumni.destroy');
Route::get('/infoalumnimenu',[InfoAlumniController::class, 'infoalumnimenu'])->name('infoalumnimenu');
Route::get('/infoalumni/{id}', [InfoAlumniController::class, 'show'])->name('infoalumni.show');







require __DIR__.'/auth.php';  