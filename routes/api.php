<?php

use Illuminate\Support\Facades\Route;


Route::prefix('inputs')->group(function () {
    Route::resource('/', 'InputsController');
});

Route::prefix('sites')->group(function () {
    Route::get('/', 'SitesController@index');
    Route::post('/', 'SitesController@store');
    Route::put('/{id}', 'SitesController@update');
});

Route::prefix('inputs-types')->group(function () {
    Route::get('/', 'InputTypesController@index');
    Route::post('/', 'InputTypesController@store');
    Route::put('/{id}', 'InputTypesController@update');
});

Route::get('/healthz', function () {
    return redirect('/healthz');
});
