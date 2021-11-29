<?php

use App\Http\Controllers\Site\ContactusController;
use App\Http\Controllers\Site\LandingPageController;
use App\Http\Controllers\Site\WorkController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /* ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('', [LandingPageController::class, 'index'])->name('landing');
    Route::get('works/{work:slug}', [WorkController::class, 'show'])->name('work.show');
    Route::get('works', [WorkController::class, 'index'])->name('work.index');
    Route::get('contactus', [ContactusController::class, 'index'])->name('contactus');
    Route::post('contactus', [ContactusController::class, 'store'])->name('contactus.store');
});