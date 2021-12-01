<?php

use App\Http\Controllers\Dashboard\MediaController;
use App\Http\Controllers\Dashboard\OptionController;
use App\Http\Controllers\Dashboard\WelcomeController;
use App\Http\Controllers\DropzoneController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->middleware(['web', 'auth'])->group(function () {
    // //localiztion route
    // Route::get('/{lang?}', ['as' => 'lang', 'uses' => 'LangController@change']);
    Route::get('', [WelcomeController::class, 'index'])->name('welcome');
    Route::resource('requirements', RequirementController::class);
    Route::resource('works', WorkController::class);
    Route::delete('options/{option}', [OptionController::class, 'destroy'])->name('options.destroy');
    Route::post('file-upload', [DropzoneController::class, 'upload'])->name('file_upload');
    Route::post('file-upload-multi/{folder}', [DropzoneController::class, 'uploadMultiple'])->name('file_upload_multi');
    Route::delete('delete-media/{media}', [MediaController::class, 'deleteMedia'])->name('media_delete');
    Route::get('settings', 'SettingController@index')->name('settings.index');
    Route::post('settings', 'SettingController@store')->name('settings.store');
    Route::resource('contactus', 'ContactusController');
    Route::post('contactus/{id}', 'ContactusController@replay')->name('contactus.replay');
});