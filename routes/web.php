<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\IndexController;
use App\Http\Controllers\Employee\CreateController;
use App\Http\Controllers\Employee\StoreController;
use App\Http\Controllers\Employee\ShowController;
use App\Http\Controllers\Employee\EditController;
use App\Http\Controllers\Employee\UpdateController;
use App\Http\Controllers\Employee\DestroyController;

Route::prefix('employees')->group(function () {
    Route::get('/', IndexController::class)->name('employee.index');
    Route::get('/create', CreateController::class)->name('employee.create');
    Route::post('/', StoreController::class)->name('employee.store');
    Route::get('/{employee}', ShowController::class)->name('employee.show');
    Route::get('/{employee}/edit', EditController::class)->name('employee.edit');
    Route::patch('/{employee}', UpdateController::class)->name('employee.update');
    Route::delete('/{employee}', DestroyController::class)->name('employee.destroy');
});


<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function() {
    Route::get('/login', 'LoginController@showLoginForm')->name('main.login');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::get('/logout', 'LoginController@logout')->name('main.logout');
});


use App\Http\Controllers\Auth\LoginController;

Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.loginForm');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
});


Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function() {
    // Main Route
    Route::get('/', 'MainController')->name('main.index');
    Route::group(['prefix' => 'employees', 'namespace' => 'Employee'], function () {
        Route::get('/', 'IndexController')->name('employee.index');
        Route::get('/create', 'CreateController')->name('employee.create');
        Route::post('/', 'StoreController')->name('employee.store');
        Route::get('/{employee}', 'ShowController')->name('employee.show');
        Route::get('/{employee}/edit', 'EditController')->name('employee.edit');
        Route::patch('/{employee}', 'UpdateController')->name('employee.update');
        Route::delete('/{employee}', 'DestroyController')->name('employee.destroy');
    });

    Route::group(['prefix' => 'orders', 'namespace' => 'Order'], function () {
        Route::get('/', 'IndexController')->name('order.index');
        Route::get('/create', 'CreateController')->name('order.create');
        Route::post('/', 'StoreController')->name('order.store');
        Route::get('/{order}', 'ShowController')->name('order.show');
        Route::get('/{order}/edit', 'EditController')->name('order.edit');
        Route::patch('/{order}', 'UpdateController')->name('order.update');
        Route::delete('/{order}', 'DestroyController')->name('order.destroy');
    });


    Route::group(['prefix' => 'dishes', 'namespace' => 'Dishes'], function () {
        Route::get('/', 'IndexController')->name('dishes.index');
        Route::get('/create', 'CreateController')->name('dishes.create');
        Route::post('/', 'StoreController')->name('dishes.store');
        Route::get('/{dish}', 'ShowController')->name('dishes.show');
        Route::get('/{dish}/edit', 'EditController')->name('dishes.edit');
        Route::patch('/{dish}', 'UpdateController')->name('dishes.update');
        Route::delete('/{dish}', 'DestroyController')->name('dishes.destroy');
    });

    Route::group(['prefix' => 'shifts', 'namespace' => 'Shifts'], function () {
        Route::get('/', 'IndexController')->name('shifts.index');
        Route::get('/create', 'CreateController')->name('shifts.create');
        Route::post('/', 'StoreController')->name('shifts.store');
        Route::get('/{shift}', 'ShowController')->name('shifts.show');
        Route::get('/{shift}/edit', 'EditController')->name('shifts.edit');
        Route::patch('/{shift}', 'UpdateController')->name('shifts.update');
        Route::delete('/{shift}', 'DestroyController')->name('shifts.destroy');
    });
});
