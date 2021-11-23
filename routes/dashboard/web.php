<?php

use App\Http\Controllers\Dashboard\MediaController;
use App\Http\Controllers\Dashboard\OptionController;
use App\Http\Controllers\DropzoneController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->middleware(['web', 'auth'])->group(function () {
    // //localiztion route
    // Route::get('/{lang?}', ['as' => 'lang', 'uses' => 'LangController@change']);
    Route::view('', 'dashboard.dashboard');
    Route::resource('requirements', RequirementController::class);
    Route::resource('works', WorkController::class);
    Route::delete('options/{option}', [OptionController::class, 'destroy'])->name('options.destroy');
    Route::post('file-upload', [DropzoneController::class, 'upload'])->name('file_upload');
    Route::post('file-upload-multi/{folder}', [DropzoneController::class, 'uploadMultiple'])->name('file_upload_multi');
    Route::delete('delete-media/{media}', [MediaController::class, 'deleteMedia'])->name('media_delete');
});