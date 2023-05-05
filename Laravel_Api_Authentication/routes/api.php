<?php
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('major',MajorController::class);
Route::resource('student',StudentController::class);

Route::controller(AuthController::class)->group(function(){
    Route::post('login','login');
    Route::post('register','register');
    Route::post('forgetPassword','forgetPassword');
    Route::post('resetPassword','resetPassword');
});
