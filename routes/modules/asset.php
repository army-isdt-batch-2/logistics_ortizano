<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetsController;


Route::get('/assets', [ AssetsController::class, 'index' ])->name('assets');



Route::get('/assets/create', [ AssetsController::class, 'create' ])->name('assets.create');



Route::post('/assets/create/save', [ AssetsController::class, 'store' ])->name('assets.create.save');



Route::get('/assets/edit/{id}', [ AssetsController::class, 'edit' ])->name('assets.edit');



Route::post('/asset/update/{id}', [ AssetsController::class, 'update' ])->name('asset.update'); 



Route::get('/assets/delete/{id}', [ AssetsController::class, 'delete' ])->name('assets.delete');
