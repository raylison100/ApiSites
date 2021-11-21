<?php

use Illuminate\Support\Facades\Route;


Route::prefix('inputs')->group(function () {
    Route::resource('/', 'InputsController');
});

Route::prefix('sites')->group(function () {
    Route::resource('/', 'SitesController');
});

Route::prefix('inputs-types')->group(function () {
    Route::resource('/', 'InputTypesController');
});

Route::get('/healthz', function () {
    return redirect('/healthz');
});
