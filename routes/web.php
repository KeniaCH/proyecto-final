<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\BranchesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/first-user',[UsersController::class,'FirtUser']);

Route::get('/',function(){
    return view('modules.users.login');
});

Route::get('/content',function(){
    return view('modules.content');
})->name('start');
//sucursales
Route::get('/branches',[BranchesController::class,'index'])->name('branches.index');