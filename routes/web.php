<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\PasswordResetController;

Route::middleware('auth')->group(function () {
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/overview', [UserController::class, 'overview'])->name('users.overview')->middleware('auth');

Route::get('/password/reset', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [PasswordResetController::class, 'reset'])->name('password.update');
});

Route::get('/home',function(){
    return view('frontend.home');
})->name('home');

Route::get('/services', function () {
    return view('frontend.services');
})->name('services');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('/doctors', function () {
    return view('frontend.doctors');
})->name('doctors');

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [App\Http\Controllers\AuthController::class, 'register_view'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');


Route::middleware('auth')->group(function () {
    Route::get('/shares/create', [ShareController::class, 'create'])->name('shares.create');
    Route::post('/shares', [ShareController::class, 'store'])->name('shares.store');
    Route::get('/shares/edit/{id}', [ShareController::class, 'edit'])->name('shares.edit');
    Route::put('/shares/{id}', [ShareController::class, 'update'])->name('shares.update');
});