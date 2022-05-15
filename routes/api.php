<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/budget', [BudgetController::class, 'index']);
Route::post('budget', [BudgetController::class, 'store']);
Route::get('/budget/{id}', [BudgetController::class, 'show']);
Route::put('/budget/{id}', [BudgetController::class, 'update']);
Route::delete('/budget/{id}', [BudgetController::class, 'destroy']);

Route::post('/expense', [ExpenseController::class, 'store']);
