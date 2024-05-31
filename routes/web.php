<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserCollection;
use App\Http\Controllers\API\UserController;

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
Route::get('/', [UserController::class,"index"])->name("home")->block(10,10);


Route::resource("user.action",UserController::class)->names(["create" => "addUser"])->parameters(["user" => "new"]);
