<?php

use App\Http\Controllers\api\v1\CategoryController;
use App\Http\Controllers\api\v1\CommentController;
use App\Http\Controllers\api\v1\DevelopmenttoolController;
use App\Http\Controllers\api\v1\ParticipateController;
use App\Http\Controllers\api\v1\ProjectController;
use App\Http\Controllers\api\v1\UserController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::apiResource('v1/categories', CategoryController::class);
Route::apiResource('v1/comments', CommentController::class);
Route::apiResource('v1/developmenttools', DevelopmenttoolController::class);
Route::apiResource('v1/participates',ParticipateController::class);
Route::apiResource('v1/projects', ProjectController::class);
Route::apiResource('v1/users', UserController::class);