<?php

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Symfony\Component\Console\Input\Input;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tickets/', [TicketController::class, 'index']);

Route::post('/search', [TicketController::class, 'search']);

Route::get('/tickets/due', [TicketController::class, 'due_time']);

Route::get('/tickets/create', [TicketController::class, 'create']);

Route::post('/tickets/create', [TicketController::class, 'store']);

Route::get('/tickets/create', [TicketController::class, 'list']);

Route::get('/tickets/{ticket}', [TicketController::class, 'show']);

Route::post('/tickets/{ticket}', [TicketController::class, 'update']);

Route::get('/tickets/delete/{ticket}', [TicketController::class, 'delete']);

Route::post('/tickets/delete/{ticket}', [TicketController::class, 'destroy']);

Route::get('/users/create', [UserController::class, 'create']);

Route::post('/users/create', [UserController::class, 'store']);

