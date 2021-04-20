<?php

use DcatAdmin\FilesManger\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('media', Controllers\FilesMangerController::class.'@index')->name('media-index');

Route::get('media/download', Controllers\FilesMangerController::class.'@download')->name('media-download');

Route::delete('media/delete',  Controllers\FilesMangerController::class.'@delete')->name('media-delete');

Route::put('media/move',  Controllers\FilesMangerController::class.'@move')->name('media-move');

Route::post('media/upload',  Controllers\FilesMangerController::class.'@upload')->name('media-upload');

Route::post('media/folder',  Controllers\FilesMangerController::class.'@newFolder')->name('media-new-folder');
