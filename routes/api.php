<?php

use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\StatusController;
use App\Http\Controllers\Api\TicketController;
use Illuminate\Support\Facades\Route;

Route::prefix('tickets')->group(function () {
    Route::get('', [TicketController::class, 'index']);
    Route::get('/count', [TicketController::class, 'countIndex']);
    Route::get('/{id}', [TicketController::class, 'show']);
    Route::post('', [TicketController::class, 'create']);
    Route::patch('/{id}', [TicketController::class, 'update']);
    Route::delete('/{id}', [TicketController::class, 'destroy']);
});

Route::prefix('messages')->group(function () {
    Route::get('', [MessageController::class, 'index']);
    Route::get('/{id}', [MessageController::class, 'show']);
    Route::post('', [MessageController::class, 'create']);
    Route::patch('/{id}', [MessageController::class, 'update']);
    Route::delete('/{id}', [MessageController::class, 'destroy']);
});

Route::prefix('statuses')->group(function () {
    Route::get('', [StatusController::class, 'index']);
    Route::get('available', [StatusController::class, 'availableStatuses']);
});

