<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\ServiceProviderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('institution')->group(function () {
    Route::get('/search', [InstitutionController::class, 'search']);
    Route::post('/store', [InstitutionController::class, 'store']);
});

Route::prefix('department')->group(function () {
    Route::get('/get', [DepartmentController::class, 'get']);
});

Route::prefix('municipality')->group(function () {
    Route::get('/getByDepartment/{idDepartment}', [MunicipalityController::class, 'getByDepartment']);
});

Route::prefix('activity')->group(function () {
    Route::get('/get', [ActivityController::class, 'get']);
});

Route::prefix('serviceProvider')->group(function () {
    Route::get('/get', [ServiceProviderController::class, 'get']);
});

