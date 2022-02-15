<?php

use App\Http\Controllers\SocialController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware("auth")->group(function () {
    Route::prefix("/blogs")->group(function (){
        Route::get("/", [\App\Http\Controllers\BlogController::class, "getAll"]);
        Route::get("/{id}", [\App\Http\Controllers\BlogController::class, "getById"]);
        Route::post("/", [\App\Http\Controllers\BlogController::class, "create"]);
        Route::delete("/{id}", [\App\Http\Controllers\BlogController::class, "delete"]);
        Route::put("/{id}", [\App\Http\Controllers\BlogController::class, "update"]);
    });

    Route::prefix("/comments")->group(function() {
        Route::get("{id}", [\App\Http\Controllers\CommentController::class, "getCommentById"]);
        Route::post("", [\App\Http\Controllers\CommentController::class, "create"]);
    });
});

Route::prefix("/categories")->group(function (){
    Route::get("/", [\App\Http\Controllers\CategoryController::class, "getAll"]);
});

Route::middleware("api")->group(function (){
    Route::post("/login", [\App\Http\Controllers\AuthController::class, "login"])->name("login");
    Route::post("/register", [\App\Http\Controllers\AuthController::class, "register"]);
    Route::post("/logout", [\App\Http\Controllers\AuthController::class, "logout"]);
    Route::get("/userProfile", [\App\Http\Controllers\AuthController::class, "userProfile"]);
    Route::get('/auth/redirect/{provider}', [SocialController::class,'redirect']);
    Route::get('/callback/{provider}', [SocialController::class, 'callback']);
});



