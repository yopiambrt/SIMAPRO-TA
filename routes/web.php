<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MawaController;

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

// Homepage
Route::get('/', function () {
    return view('template/homepage');
});

//admin

Route::middleware(['auth'])->group(function () {

    route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    route::get('profile', [HomeController::class, 'profile'])->name('profile');

    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('Admin')->group(
        function () {
            Route::get('/', [AdminController::class, 'index'])->name('dashboard');

            Route::get('/user', [AdminController::class, 'user'])->name('user.index');
        }
    );

    Route::prefix('mawa/dashboard')->namespace('Mawa')->name('mawa.')->middleware('mawa')->group(
        function () {
            Route::get('/', [MawaController::class, 'index'])->name('dashboard');
        }
    );

    Route::prefix('mahasiswa/dashboard')->namespace('Mahasiswa')->name('mhs.')->middleware('mahasiswa')->group(
        function () {
            Route::get('/', [MahasiswaController::class, 'index'])->name('dashboard');
        }
    );
});
require __DIR__ . '/auth.php';
