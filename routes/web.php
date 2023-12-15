<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RentLogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipRentController;
use App\Http\Controllers\SportEquipController;

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
Route::get('/', [PublicController::class, 'index']);

Route::middleware('only_guest')->group(function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating' ]);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('only_admin');
    Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');
    
        Route::get('sportsequip', [SportEquipController::class, 'index'])->middleware('auth');
        Route::get('equip-add', [SportEquipController::class, 'add'])->middleware('only_admin');;
        Route::post('equip-add', [SportEquipController::class, 'store'])->middleware('only_admin');;
        Route::get('equip-edit/{slug}', [SportEquipController::class, 'edit'])->middleware('only_admin');;
        Route::post('equip-edit/{slug}', [SportEquipController::class, 'update'])->middleware('only_admin');;
        Route::get('equip-delete/{slug}', [SportEquipController::class, 'delete'])->middleware('only_admin');;
        Route::get('equip-destroy/{slug}', [SportEquipController::class, 'destroy'])->middleware('only_admin');;
        Route::get('equip-deleted', [SportEquipController::class, 'deletedequip'])->middleware('only_admin');;
        Route::get('equip-restore/{slug}', [SportEquipController::class, 'restore'])->middleware('only_admin');;

        Route::get('categories', [CategoryController::class, 'index'])->middleware('only_admin');;
        Route::get('category-add', [CategoryController::class, 'add'])->middleware('only_admin');;
        Route::post('category-add', [CategoryController::class, 'store'])->middleware('only_admin');;
        Route::get('category-edit/{slug}', [CategoryController::class, 'edit'])->middleware('only_admin');;
        Route::put('category-edit/{slug}', [CategoryController::class, 'update'])->middleware('only_admin');;
        Route::get('category-delete/{slug}', [CategoryController::class, 'delete'])->middleware('only_admin');;
        Route::get('category-destroy/{slug}', [CategoryController::class, 'destroy'])->middleware('only_admin');;
        Route::get('category-deleted', [CategoryController::class, 'deletedCategory'])->middleware('only_admin');;
        Route::get('category-restore/{slug}', [CategoryController::class, 'restore'])->middleware('only_admin');;

        Route::get('users', [UserController::class, 'index'])->middleware('only_admin');;
        Route::get('user-registered', [UserController::class, 'registered'])->middleware('only_admin');;
        Route::get('user-detail/{slug}', [UserController::class, 'detail'])->middleware('only_admin');; 
        Route::get('user-approve/{slug}', [UserController::class, 'approve'])->middleware('only_admin');; 
        Route::get('user-delete/{slug}', [UserController::class, 'delete'])->middleware('only_admin');;
        Route::get('user-destroy/{slug}', [UserController::class, 'destroy'])->middleware('only_admin');;
        Route::get('user-deleted-list', [UserController::class, 'deleted'])->middleware('only_admin');;
        Route::get('user-restore/{slug}', [UserController::class, 'restore'])->middleware('only_admin');;

        Route::get('equip-rent', [EquipRentController::class, 'index'])->middleware('only_admin');; 
        Route::post('equip-rent', [EquipRentController::class, 'rent'])->middleware('only_admin');; 
        Route::get('equip-return', [EquipRentController::class, 'return'])->middleware('only_admin');; 
        Route::post('equip-return', [EquipRentController::class, 'returnEquip'])->middleware('only_admin');;

        Route::get('rent-log', [RentLogController::class, 'index']);

});

