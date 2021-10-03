<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view("login","user");
Route::post("user",[UserController::class,"getData"]);
Route::get("pro",[UserController::class,"index"]);
Route::view("signup","signup");
Route::post("save",[MemberController::class,"addData"]);
