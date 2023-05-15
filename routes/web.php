<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group([
    "middleware" => ["auth","Auth.admin"],
    "as" => "admin."
], function(){

    Route::group([
        "prefix" => "habilitations",
        "as" => "habilitations."
    ], function(){
        Route::get("/utilisateurs", [UserController::class,"index"])->name("user.index");

        // Route::get("/RolesEtPermissions", [UserController::class,"index"])->name("user.index");
    });
});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get("habilitations/utilisateurs",[UserController::class,"index"])->name("utilisateurs")->middleware("Auth.admin");
