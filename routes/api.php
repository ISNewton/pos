<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;
use App\Models\Supplier;
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

// Route::group(['middleware' => 'auth:sanctum'], function () {
    //All secure URL's

// });


Route::post("login", [AuthController::class, 'login']);

Route::post("register", [AuthController::class, 'register']);


Route::post('purchase', [PurchaseController::class, 'purchase']);

Route::get('account', [AccountController::class, 'index']);
Route::get('reports', [ReportController::class, 'sales']);


Route::apiResource('inventory', InventoryController::class);
Route::apiResource('suppliers', SupplierController::class);
Route::apiResource('sales', SaleController::class);

Route::post("login_manager", [AuthController::class, 'loginManager']);
Route::post("change_password", [AuthController::class, 'changePassword']);
Route::post("change_manager_password", [AuthController::class, 'changeManagerPassword']);
// Route::post('import',[InventoryController::class,'import']);

