<?php

use App\Http\Controllers\api\user;
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

Route::post("/login", [user::class,"login"]);

Route::group(["middleware" => "jwtToken"], function () {

    Route::post("/logout", [user::class, "logout"]);


});
