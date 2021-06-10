<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;


Route::get('/deliveries', [ DeliveryController::class, 'index' ])->name('deliveries');



Route::get('/deliveries/create', [ DeliveryController::class, 'create' ])->name('deliveries.create');



Route::post('/deliveries/create/save', [ DeliveryController::class, 'store' ])->name('deliveries.create.save');



Route::get('/deliveries/edit/{id}', [ DeliveryController::class, 'edit' ])->name('deliveries.edit');



Route::post('/deliveries/update/{id}', [ DeliveryController::class, 'update' ])->name('deliveries.update');



Route::get('/deliveries/delete/{id}', [ DeliveryController::class, 'delete' ])->name('deliveries.delete');
