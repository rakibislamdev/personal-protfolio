<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\InformationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// route for user side
Route::get('/', [HomeController::class, 'index'])->name('home');

// route for admin side
Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
// personal info route
Route::get('/admin/personal-info', [InformationController::class, 'showPersonalInfoPage'])->name('admin.personal-info');
Route::post('admin/store/personal-info', [InformationController::class, 'storePersonalInfo'])->name('admin.personal-info.store');

// education info route
Route::get('/admin/education-info', [InformationController::class, 'showEducationInfoPage'])->name('admin.education-info');
Route::post('admin/store/education-info', [InformationController::class, 'storeEducationInfo'])->name('admin.education-info.store');
