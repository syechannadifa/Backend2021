<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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

#create route for patient
Route::get('/patients', [PatientController::class, 'index']);
Route::post('/patients', [PatientController::class, 'store']);
Route::put('/patients/{id}', [PatientController::class, 'update']);
Route::get('/patients/{id}', [PatientController::class, 'show']);
Route::delete('/patients/{id}', [PatientController::class, 'destroy']);
Route::get('/patients/search/{name}', [PatientController::class, 'search']);
Route::get('/patients/status/positive', [PatientController::class, 'positive']);
Route::get('/patients/status/recovered', [PatientController::class, 'recovered']);
Route::get('/patients/status/dead', [PatientController::class, 'dead']);