
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoicesController;   


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route:: group(['prefix' => 'v1','namespace' => 'App\Http\Controllers\Api\V1'], function () {
    route::apiResource('customer', CustomerController::class);
    route::apiResource('invoices', InvoicesController::class);
 
});

