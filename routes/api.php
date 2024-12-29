<?php

use App\Http\Controllers\CategoriesController;
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

// all Api here must be Api Authenticated
Route::group(['middleware' => ['api', 'checkPassword', 'changelang']], function () {
    Route::post('get-main-categories', [\App\Http\Api\Controllers\CategoriesController::class, 'index']);
});
