<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('student/index', [StudentController::class, 'index']);
Route::get('student/create', [StudentController::class, 'create']);
Route::get('student/update', [StudentController::class, 'update']);
Route::get('student/delete', [StudentController::class, 'delete']);


// =======relationship==========
// one to one
Route::get('all', [StudentController::class, 'all']);

// one to many 

Route::get('dept/all', [DepartmentController::class, 'all']);

