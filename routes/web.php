<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CodingSkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PersonalInfoController;

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
Route::get('/admin/personal-info', [PersonalInfoController::class, 'index'])->name('admin.personal-info');
Route::post('admin/store/personal-info', [PersonalInfoController::class, 'store'])->name('admin.personal-info.store');

// education info route
Route::get('/admin/education-info', [EducationController::class, 'index'])->name('admin.education-info');
Route::post('admin/store/education-info', [EducationController::class, 'store'])->name('admin.education-info.store');
Route::get('admin/get/education-info', [EducationController::class, 'getEducationInfo'])->name('admin.education-info.get');
Route::get('admin/edit/education-info/', [EducationController::class, 'edit'])->name('admin.education-info.edit');
Route::post('admin/update/education-info', [EducationController::class, 'update'])->name('admin.education-info.update');
Route::get('admin/delete/education-info', [EducationController::class, 'deleteEducationInfo'])->name('admin.education-info.delete');


// experience info route
Route::get('admin/experience-info', [ExperienceController::class, 'index'])->name('admin.experience-info');
Route::post('admin/store/experience-info', [ExperienceController::class, 'store'])->name('admin.experience-info.store');
Route::get('admin/get/experience-info', [ExperienceController::class, 'getExperienceInfo'])->name('admin.experience-info.get');
Route::get('admin/edit/experience-info', [ExperienceController::class, 'edit'])->name('admin.experience-info.edit');
Route::post('admin/update/experience-info', [ExperienceController::class, 'update'])->name('admin.experience-info.update');
Route::get('admin/delete/experience-info', [ExperienceController::class, 'deleteExperienceInfo'])->name('admin.experience-info.delete');

// coding skill route
Route::get('/admin/coding-skill', [CodingSkillController::class, 'index'])->name('admin.coding-skill');
