<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WhatsappController;
use Illuminate\Support\Facades\Route;

// 🔹 Route untuk subdomain dropship.ternakcuan.id
Route::domain('dropship.ternakcuan.id')->group(function () {
    Route::get('/', [WebsiteController::class, 'dropship'])->name('dropship');
});

// 🔹 Route untuk domain utama (ternakcuan.id atau www.ternakcuan.id)
Route::domain('ternakcuan.id')->group(function () {
    Route::get('/', [WebsiteController::class, 'index']);
});

    Route::get('/', [WebsiteController::class, 'index']);
    Route::get('/dropship', [WebsiteController::class, 'dropship'])->name('dropship.local');
    Route::post('/filter-data', [WebsiteController::class, 'filterdata'])->name('filterdata');
    Route::post('/send', [WhatsappController::class, 'storeContactMe'])->name('send.wa');

// (Opsional) Jika kamu juga pakai www.ternakcuan.id
Route::domain('www.ternakcuan.id')->group(function () {
    Route::get('/', [WebsiteController::class, 'index']);
    Route::get('/dropship', [WebsiteController::class, 'dropship'])->name('dropship.local');
    Route::post('/filter-data', [WebsiteController::class, 'filterdata'])->name('filterdata');
    Route::post('/send', [WhatsappController::class, 'storeContactMe'])->name('send.wa');
});
