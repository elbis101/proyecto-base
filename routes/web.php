<?php

use Illuminate\Support\Facades\Route;
use App\Specialty;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


$Auth=Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
   //specialty
Route::get('/specialties',[App\Http\Controllers\Admin\SpecialtyController::class,'index'])->name('index');
Route::get('/specialties/create',[App\Http\Controllers\Admin\SpecialtyController::class,'create'])->name('create'); //visita el registro
Route::get('/specialties/{specialty}/edit',[App\Http\Controllers\Admin\SpecialtyController::class,'edit'])->name('edit'); 

Route::post('/specialties', [App\Http\Controllers\Admin\SpecialtyController::class,'store'])->name('store');//envia el formulario
Route::put('/specialties/{specialty}',[App\Http\Controllers\Admin\SpecialtyController::class,'update'])->name('update'); 
Route::delete('/specialties/{specialty}',[App\Http\Controllers\Admin\SpecialtyController::class,'destroy'])->name('destroy'); 


//doctor
Route::resource('/doctors','App\Http\Controllers\Admin\DoctorController');
Route::resource('/patients','App\Http\Controllers\Admin\PatientController');
});

Route::middleware(['auth', 'doctor'])->namespace('Doctor')->group(function () {
Route::get('/shedule',[App\Http\Controllers\Doctor\ScheduleController::class,'edit'])->name('edit');
 
Route::post('/shedule',[App\Http\Controllers\Doctor\ScheduleController::class,'store'])->name('store');

 });







