<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WhatsappController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('/',WebsiteController::class);
Route::post('/send',[WhatsappController::class,'storeContactMe'])->name('send.wa');
