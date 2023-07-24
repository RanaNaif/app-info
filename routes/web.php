<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;

use App\Http\Controllers\StudentController; //add the ControllerNameSpace
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
Route::get('/user/{id}', function (string $id) {
    return new UserResource(Student::findOrFail($id));
});
Route::resource("/student", StudentController::class);
