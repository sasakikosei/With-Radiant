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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('users',UsersController::class,['only' => ['index','show']]);
Route::resource('recruit',RecruitController::class,['only' => ['index','show']]);
Route::resource('watch',WatchController::class,['only' => ['index','show']]);

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
        Route::delete('edit', [UsersController::class, 'delete'])->name('users.delete');
    });
});

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'recruit/{id}'], function () {
    Route::resource('recruit', RecruitController::class, ['only' => ['store','update','edit', 'destroy','post']]);
    Route::get('create', [RecruitController::class, 'create'])->name('recruit.create');
    Route::post('create', [RecruitController::class, 'store']);
    });
});

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'watch/{id}'], function () {
    Route::resource('watch', WatchController::class, ['only' => ['store','update','edit', 'destroy','post']]);
    Route::get('create', [WatchController::class, 'create'])->name('watch.create');
    Route::post('create', [WatchController::class, 'store']);
    });
});

    