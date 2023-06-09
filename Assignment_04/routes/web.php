<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MajorController;
use App\Models\student;
use App\Models\major;

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

//major
Route::get('/majorCreate',[MajorController::class,'majorCreate'])->name('major#create');
Route::get('/majorShow',[MajorController::class,'majorShow'])->name('major#show');

//student
Route::get('/',[StudentController::class,'studentShow'])->name('student#show');
Route::get('/studentCreate',[StudentController::class,'studentCreate'])->name('student#create');

//export
Route::get('students/export/', [StudentController::class, 'export'])->name('student#export');

//import
Route::post('students/import/', [StudentController::class, 'import'])->name('student#import');

//search
Route::get('/search',[StudentController::class,'search'])->name('student#search');

