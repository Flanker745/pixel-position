<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\tagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, "index"]);
Route::get("/search" , searchController::class);
Route::get("/tags/{tag:name}" , tagController::class);
Route::get("/jobs" , [JobController::class, "create"]);
Route::post("/jobs" , [JobController::class, "store"]);


Route::middleware("guest")->group(function () {
    Route::get("/register", [RegisterController::class, "create"]);
    Route::post("/register", [RegisterController::class, "store"]);

    Route::get("/login", [LoginController::class, "create"]);
    Route::post("/login", [LoginController::class, "store"]);
});

Route::delete("/logout", [LoginController::class, "destroy"])->middleware("auth");
