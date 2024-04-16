<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


use Illuminate\Support\Facades\Route;

route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Security Incident Report Module
Route::get('/report/create', function (){return view ('report.create');})->name('report.create');
Route::get('/report/view', [ReportController::class, 'view'])->name('report.view');
Route::get('/report/myreports', [ReportController::class, 'myrep'])->name('report.myreports');
Route::get('/report/{report}/details', [ReportController::class, 'details'])->name('report.details');
Route::get('/report/{report}/edit', [ReportController::class, 'edit'])->name('report.edit');
Route::post('/report', [ReportController::class, 'store'])->name('report.store');
Route::post('/report/{report}/supdoc', [ReportController::class, 'storesupdoc'])->name('report.storesupdoc');
Route::put('/report/update', [ReportController::class, 'update'])->name('report.update');
Route::post('/report/search', [ReportController::class, 'search'])->name('report.search');

//Security Incident Report Module Admin
Route::get('/admin/view', [AdminController::class, 'view'])->name('admin.view');
Route::get('/admin/viewuser', [AdminController::class, 'viewuser'])->name('admin.viewuser');
Route::get('/admin/register', function (){return view ('admin.register');})->name('admin.register');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');




require __DIR__.'/auth.php';
