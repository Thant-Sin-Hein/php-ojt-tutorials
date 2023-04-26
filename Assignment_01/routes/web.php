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
Route::post('/majorStore',[MajorController::class,'majorStore'])->name('major#store');
Route::get('/majorShow',[MajorController::class,'majorShow'])->name('major#show');
Route::delete('/majorShow/{majors}',[MajorController::class,'majorRemove'])->name('major#remove');
Route::get('/majorEdit/{id}/edit',[MajorController::class,'majorEdit'])->name('major#edit');
Route::put('/majorEdit/{id}', [MajorController::class, 'update'])->name('major#update');

//student
Route::get('/studentCreate',[MajorController::class,'studentCreate'])->name('student#create');
Route::post('/studentStore',[StudentController::class,'studentStore'])->name('student#store');
Route::get('/',[StudentController::class,'studentShow'])->name('student#show');
Route::get('/studentEdit/{id}/edit',[StudentController::class,'studentEdit'])->name('student#edit');
Route::put('/studentEdit/{id}', [StudentController::class, 'studentUpdate'])->name('student#update');
Route::delete('/{students}',[StudentController::class,'studentRemove'])->name('student#remove');


