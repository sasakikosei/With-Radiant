<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RecruitController;
use App\Http\Controllers\WatchController;

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

Route::get('/', function () {
    return view('top');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('users',UsersController::class,['only' => ['index','show']]);
Route::resource('recruit',RecruitController::class,['only' => ['index','show','destroy']]);
Route::resource('watch',WatchController::class,['only' => ['index','show','destroy']]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'users/{id}'], function () { 
        Route::get('mypage', [UsersController::class, 'showMypage'])->name('users.mypage');
        Route::get('edit', [UsersController::class, 'edit'])->name('users.edit');
        Route::post('edit', [UsersController::class, 'store'])->name('users.store');
        Route::put('edit', [UsersController::class, 'update'])->name('users.update');
        Route::delete('edit', [UsersController::class, 'destroy'])->name('users.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'recruit/{id}'], function () {
    Route::get('create', [RecruitController::class, 'create'])->name('recruit.create');
    Route::post('create', [RecruitController::class, 'store'])->name('recruit.store');
    Route::delete('show', [RecruitController::class, 'destroy'])->name('recruit.destroy');
    Route::get('edit', [RecruitController::class, 'edit'])->name('recruit.edit');
    Route::post('edit', [RecruitController::class, 'store'])->name('recruit.edit.store');
    Route::put('edit', [RecruitController::class, 'update'])->name('recruit.update');
    });
});

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'watch/{id}'], function () {
    Route::get('create', [WatchController::class, 'create'])->name('watch.create');
    Route::post('create', [WatchController::class, 'store'])->name('watch.store');
    Route::delete('show', [WatchController::class, 'destroy'])->name('watch.destroy');
    Route::get('edit', [WatchController::class, 'edit'])->name('watch.edit');
    Route::post('edit', [WatchController::class, 'store'])->name('watch.edit.store');
    Route::put('edit', [WatchController::class, 'update'])->name('watch.update');
    });
});

    