<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//major
Route::get('/majorCreate',[StudentController::class,'majorCreate'])->name('major#create');
Route::post('/majorStore',[StudentController::class,'majorStore'])->name('major#store');
Route::get('/majorShow',[StudentController::class,'majorShow'])->name('major#show');
Route::delete('/majorShow/{majors}',[StudentController::class,'majorRemove'])->name('major#remove');
Route::get('/majorEdit/{id}/edit',[StudentController::class,'majorEdit'])->name('major#edit');
Route::put('/majorEdit/{id}', [StudentController::class, 'update'])->name('major#update');

//student
Route::get('/',[StudentController::class,'studentCreate'])->name('student#create');
Route::post('/studentStore',[StudentController::class,'studentStore'])->name('student#store');
