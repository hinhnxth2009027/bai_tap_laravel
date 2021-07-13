<?php

use Illuminate\Support\Facades\Route;

Route::get('/data-handle/{id}/path', [\App\Http\Controllers\DataHandleController::class, 'handlePathVariable']);
Route::get('/data-handle/query-string', [\App\Http\Controllers\DataHandleController::class, 'handleQueryString']);
Route::get('data-handle/form', [\App\Http\Controllers\DataHandleController::class, 'returnForm']);
Route::post('data-handle/form', [\App\Http\Controllers\DataHandleController::class, 'processForm']);
