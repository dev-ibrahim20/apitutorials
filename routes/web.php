<?php

use App\Http\Api\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// all Api here must be Api Authenticated
Route::group(['middleware' => 'auth:api', 'namespace' => 'Api'], function () {
    Route::post('get-main-categories', [CategoriesController::class, 'index']);
});
