<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('events.index');
});

Route::controller(EventController::class)->group(function () {
    Route::get('/events', 'index')->name('events.index');
    Route::get('/events/create', 'create')->name('events.create');
    Route::post('/events', 'store')->name('events.store');
    Route::get('/events/{id}', 'details')->name('events.details');
});