<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->middleware('web')->group(function () {
    // //localiztion route
    // Route::get('/{lang?}', ['as' => 'lang', 'uses' => 'LangController@change']);
    Route::view('', 'dashboard.dashboard');
});