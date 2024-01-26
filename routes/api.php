<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\Auth\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/register', [AuthController::class, 'register'])->middleware('role:admin,m&e_manager');
    // patients
    Route::get('patients', [PatientController::class, 'index']);
    Route::post('patients', [PatientController::class, 'store']);
    Route::get('patients/{patient}', [PatientController::class, 'show']);
    Route::put('patients/{patient}', [PatientController::class, 'update']);
    Route::delete('patients/{patient}', [PatientController::class, 'destroy']);
    // users
    Route::get('patients', [PatientController::class, 'index']);
    Route::post('patients', [PatientController::class, 'store'])->middleware('role:admin,m&e_manager');
    Route::get('patients/{patient}', [PatientController::class, 'show']);
    Route::put('patients/{patient}', [PatientController::class, 'update'])->middleware('role:admin,m&e_manager');
    Route::delete('patients/{patient}', [PatientController::class, 'destroy'])->middleware('role:admin,m&e_manager');
    
});