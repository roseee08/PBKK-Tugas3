<?php

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudyprogramController;
use App\Models\Faculty;
use App\Models\Studyprogram;
use Illuminate\Support\Facades\Route;


Route::get('/fakultas', [FacultyController::class, 'index'])->name('Fakultas.index');
Route::get('/fakultas/create', [FacultyController::class, 'create'])->name('Fakultas.create');
Route::post('/fakultas', [FacultyController::class, 'store'])->name('Fakultas.store');
Route::get('/fakultas/{faculty}', [FacultyController::class, 'show'])->name('Fakultas.show');
Route::get('/fakultas/{faculty}/edit', [FacultyController::class, 'edit'])->name('Fakultas.edit');
Route::put('/fakultas/{faculty}', [FacultyController::class, 'update'])->name('Fakultas.update');
Route::delete('/fakultas/{faculty}', [FacultyController::class, 'destroy'])->name('Fakultas.destroy');

Route::get('/prodi/create', [StudyprogramController::class, 'create'])->name('Prodi.create');
Route::get('/prodi', [StudyprogramController::class, 'index'])->name('Prodi.index');

Route::post('/prodi', [StudyprogramController::class, 'store'])->name('Prodi.store');
Route::get('/prodi/{studyprogram}', [StudyprogramController::class, 'show'])->name('Prodi.show');
Route::get('/prodi/{studyprogram}/edit', [StudyprogramController::class, 'edit'])->name('Prodi.edit');
Route::put('/prodi/{studyprogram}', [StudyprogramController::class, 'update'])->name('Prodi.update');
Route::delete('/prodi/{studyprogram}', [StudyprogramController::class, 'destroy'])->name('Prodi.destroy');

// Route::resource('prodi', StudyprogramController::class);
