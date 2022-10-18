<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
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


Route::get('registration', [AuthController::class, 'registerView'])->name('registration');
Route::post('registration', [AuthController::class, 'create'])->name('createUser');
Route::get('verifiaction', [AuthController::class, 'verifyView'])->name('verify');
Route::post('verify', [AuthController::class, 'verify'])->name('verifyOtp');


Route::get('/clear/route', [ConfigController::class, 'clearRoute']);
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('course')->group(function () {
    Route::get('/', [CourseController::class, 'all'])->name('all_course');
    Route::get('/view', [CourseController::class, 'view'])->name('view');
    Route::get('{id}', [CourseController::class, 'single'])->name('single_course');
});


Route::get('enrol', function ()
{
    if(Auth::user()){
        echo 'Registered user';
    }else{
        echo 'unknown user';
    }
})->name('enrol');

Auth::routes();

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::prefix('admin')->middleware('auth')->group(function () {
    route::get('/', function () {
        return redirect('/admin/dashboard');
    })->name('admin');
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::prefix('categories')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('category');
        Route::post('store', [ServiceController::class, 'store'])->name('storeServices');
        Route::get('{id}/edit', [ServiceController::class, 'edit'])->name('editService');
        Route::post('update/{id}', [ServiceController::class, 'update'])->name('updateServices');
        Route::delete('delete/{id}', [ServiceController::class, 'destroy'])->name('destroyService');
    });

    Route::prefix('course')->group(function ()
    {
        Route::get('/', [CourseController::class, 'index'])->name('course');
        Route::get('/add', [CourseController::class, 'create'])->name('add-course');
        Route::post('/store', [CourseController::class, 'store'])->name('storeCourse');
    });

    Route::prefix('setting')->group(function () {
        Route::get('/', [SettingController::class, 'index'])->name('setting');
        Route::post('settingUpdate', [SettingController::class, 'settingUpdate'])->name('settingUpdate');
    });
});



