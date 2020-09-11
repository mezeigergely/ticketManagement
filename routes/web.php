<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/tickets/', [TicketController::class, 'index']);

Route::get('/tickets/create', [TicketController::class, 'create']);

Route::post('/tickets/create', [TicketController::class, 'store']);

Route::get('/tickets/create', [TicketController::class, 'list']);

Route::get('/tickets/{ticket}', [TicketController::class, 'show']);

Route::post('/tickets/{ticket}', [TicketController::class, 'update']);

Route::get('/tickets/delete/{ticket}', [TicketController::class, 'delete']);

Route::post('/tickets/delete/{ticket}', [TicketController::class, 'destroy']);

Route::get('/users/create', [UserController::class, 'create']);

Route::post('/users/create', [UserController::class, 'store']);

