<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index']);

Route::post('/add-student', [StudentController::class, 'addStudent'])->name('add.student');

Route::get('/students/{id}', [StudentController::class, 'getStudentById']);

Route::put('/student', [StudentController::class, 'updateStudent'])->name('student.update');

Route::delete('/students/{id}', [StudentController::class, 'deleteStudent']);

Route::delete('/select-students', [StudentController::class, 'deleteCheckedStudents'])->name('delete.seleted');

Route::get('/register', [AuthController::class, 'index']);

Route::post('/register', [AuthController::class, 'registerasubmit'])->name('auth.registersubmit');