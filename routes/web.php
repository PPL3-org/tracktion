<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\VehicleCheckController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

// Shipment
Route::get('/shipments', [ShipmentController::class, 'index']);

// Driver
Route::get('/drivers', [DriverController::class, 'index']);

// Truck
Route::get('/trucks', [TruckController::class, 'index']);

// Inspection
Route::get('/inspections', [VehicleCheckController::class, 'index']);

// Report
Route::get('/reports', [ReportController::class, 'index']);

// Verb          Path                        Action  Route Name
// GET           /users                      index   users.index
// GET           /users/create               create  users.create
// POST          /users                      store   users.store
// GET           /users/{user}               show    users.show
// GET           /users/{user}/edit          edit    users.edit
// PUT|PATCH     /users/{user}               update  users.update
// DELETE        /users/{user}               destroy users.destroy