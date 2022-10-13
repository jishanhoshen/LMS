<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function () {
    route::get('/', function () {
        return redirect('/admin/dashboard');
    })->name('admin');
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::prefix('categories')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('services');
        Route::post('store', [ServiceController::class, 'store'])->name('storeServices');
        Route::get('{id}/edit', [ServiceController::class, 'edit'])->name('editService');
        Route::post('update/{id}', [ServiceController::class, 'update'])->name('updateServices');
        Route::delete('delete/{id}', [ServiceController::class, 'destroy'])->name('destroyService');
    });
    Route::prefix('portfolio')->group(function ()
    {
       Route::get('/', [PortfolioController::class, 'index'])->name('portfolio'); 
       Route::get('add', [PortfolioController::class, 'create'])->name('addPortfolio');
       Route::post('store', [PortfolioController::class, 'store'])->name('storePortfolio');
       Route::post('thumb', [PortfolioController::class, 'setThumb'])->name('addthumbPortfilio');
    });
    Route::prefix('setting')->group(function ()
    {
        Route::get('/', [SettingController::class, 'index'])->name('setting'); 
        Route::post('logo', [SettingController::class, 'logostore'])->name('logostore'); 
    });
});