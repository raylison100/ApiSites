<?php

use Illuminate\Support\Facades\Route;


Route::prefix('inputs')->group(function () {
    Route::get('/', 'InputsController@index');
    Route::post('/', 'InputsController@store');
    Route::put('/{id}', 'InputsController@update');
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

Route::prefix('check-words')->group(function () {
    Route::get('/personal', 'PersonalWordsController@check');
    Route::get('/sensitive', 'SensitiveWordsController@check');
});

Route::get('/healthz', function () {
    return redirect('/healthz');
});
