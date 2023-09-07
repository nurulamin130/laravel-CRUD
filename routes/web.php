<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
route::get('/',[HomeController::class,'index'])->name('create');
route::get('/add/student',[StudentController::class,'addStudent'])->name('add-student');
route::post('/store',[StudentController::class,'store'])->name('store');
route::get('/manage/student',[StudentController::class,'manageStudent'])->name('manage-student');
route::get('/edit/student/{id}',[StudentController::class,'edit'])->name('edit');
route::post('/update',[StudentController::class,'updateInfo'])->name('update');
route::get('/delete',[StudentController::class,'deleteInfo'])->name('delete');
