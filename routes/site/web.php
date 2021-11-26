<?php

use App\Http\Controllers\Site\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /* ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('', [LandingPageController::class, 'index'])->name('landing');
});