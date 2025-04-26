<?php

use App\Http\Controllers\Api\TicketController;
use Illuminate\Support\Facades\Route;

Route::prefix('tickets')->group(function () {
    Route::get('', [TicketController::class, 'index']);
    Route::get('/{id}', [TicketController::class, 'show']);
    Route::post('', [TicketController::class, 'create']);
    Route::patch('/{id}', [TicketController::class, 'update']);
    Route::delete('/{id}', [TicketController::class, 'destroy']);
});

