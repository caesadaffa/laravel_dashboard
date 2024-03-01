<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\buahController;
use App\Http\Controllers\pembeliController;
use App\Http\Controllers\sayurController;
use App\Models\buah;
use App\Models\pembeli;
use App\Models\sayur;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;


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
Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::group(["prefix"=>"/page"],function(){
    Route::get('/buah/all', [buahController::class,'index']);

    Route::get('/buah/detail/{buah}', [buahController::class,'show']);
    
    Route::get('/buah/create', [buahController::class, 'create']);
    Route::post('/buah/add', [buahController::class, 'add']);
    Route::delete('/buah/{buah}', [buahController::class,'destroy']);
    
});

Route::get('/pembeli/all', [pembeliController::class,'index']);

Route::get('/pembeli/detail/{pembeli}', [pembeliController::class,'show']);

Route::get('/sayur/all', [sayurController::class,'index']);

Route::get('/sayur/detail/{sayurs}', [sayurController::class,'show']);

Route::group(["prefix" => "/student"], function(){
    Route::get('/', [StudentsController::class,'index'])->name('student.all'); //view
    Route::get('/detail/{student}', [StudentsController::class,'show']); //detail
    Route::get('/create', [StudentsController::class,'create']); //create data
    Route::post('/add', [StudentsController::class,'store']); // add data
    Route::delete('/delete/{student}', [StudentsController::class,'destory']); // delete data
    Route::get('/edit/{student}', [StudentsController::class,'edit']); // provide form edit
    Route::post('/update/{student}', [StudentsController::class,'update']); // edit data
});

Route::group(["prefix" => "/kelas"], function(){
    Route::get('/', [KelasController::class,'index'])->name('kelas.all'); //view
    Route::get('/detail/{kelas}', [KelasController::class,'show']); //detail
    Route::get('/create', [KelasController::class,'create']); //create data
    Route::post('/add', [KelasController::class,'store']); // add data
    Route::delete('/delete/{kelas}', [KelasController::class,'destory']); // delete data
    Route::get('/edit/{kelas}', [KelasController::class,'edit']); // provide form edit
    Route::post('/update/{kelas}', [KelasController::class,'update']); // edit data
});

Route::group(["prefix" => "/auth"], function(){
    Route::get('/register', [AuthController::class, 'registerView'])->name('RegisterView');
    Route::post('/register', [AuthController::class, 'register'])->name('Register');
    Route::get('/login', [AuthController::class, 'loginView'])->name('LoginView');
    Route::post('/login', [AuthController::class, 'login'])->name('Login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('Logout');
});