<?php

use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\JournalController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\UserController;
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

Route::post('login', [LoginController::class, 'login']);
Route::post('attendance-rfid/{rfid}', [AttendanceController::class, 'attendanceByRfid']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [LoginController::class, 'logout']);
    Route::get('user', [UserController::class, 'user']);

    // Attendance
    Route::get('attendance', [AttendanceController::class, 'index']);
    Route::post('attendance', [AttendanceController::class, 'store']);
    Route::post('permission', [AttendanceController::class, 'permission']);

    // Journal
    Route::get('journal', [JournalController::class, 'index']);
    Route::post('journal', [JournalController::class, 'store']);
    Route::put('journal/{jurnal}', [JournalController::class, 'update']);

    Route::get('list-students', [StudentController::class, 'index']);
});
