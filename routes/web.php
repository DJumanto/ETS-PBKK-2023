<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekamMedisController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [RekamMedisController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/pasien/view', [RekamMedisController::class, 'seeMedicalRecord']);
    Route::get('/pasien/view/{id}', [RekamMedisController::class, 'seeMedicalRecordByPatientId']);
    Route::get('/pasien/view/doktor/{id}', [RekamMedisController::class, 'seeMedicalRecordByDoctorId']);
});

require __DIR__.'/auth.php';
