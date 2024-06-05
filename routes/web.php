<?php

use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('principal');
});

Route::get('/qmsomos', function () {
    return view('qmsomos');
});

Route::get('/forms', [ContactController::class, 'showForm']);
Route::post('/forms', [ContactController::class, 'submitForm']);
