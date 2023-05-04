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
Route::get('/major-create',[MajorController::class,'majorCreate'])->name('major#create');
Route::post('/major-store',[MajorController::class,'majorStore'])->name('major#store');
Route::get('/major-show',[MajorController::class,'majorShow'])->name('major#show');
Route::delete('/major-show/{majors}',[MajorController::class,'majorRemove'])->name('major#remove');
Route::get('/major-edit/{id}/edit',[MajorController::class,'majorEdit'])->name('major#edit');
Route::put('/major-edit/{id}', [MajorController::class, 'update'])->name('major#update');

//student
Route::get('/student-create',[MajorController::class,'studentCreate'])->name('student#create');
Route::post('/student-store',[StudentController::class,'studentStore'])->name('student#store');
Route::get('/',[StudentController::class,'studentShow'])->name('student#show');
Route::get('/student-edit/{id}/edit',[StudentController::class,'studentEdit'])->name('student#edit');
Route::put('/student-edit/{id}', [StudentController::class, 'studentUpdate'])->name('student#update');
Route::delete('/{students}',[StudentController::class,'studentRemove'])->name('student#remove');

//export
Route::get('students/export/', [StudentController::class, 'export'])->name('student#export');

//import
Route::post('students/import/', [StudentController::class, 'import'])->name('student#import');

