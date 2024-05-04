<?php

use Illuminate\Support\Facades\Route;
use App\Specialty;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//specialty
Route::get('/specialties',[App\Http\Controllers\SpecialtyController::class,'index'])->name('index');
Route::get('/specialties/create',[App\Http\Controllers\SpecialtyController::class,'create'])->name('create'); //visita el registro
Route::get('/specialties/{specialty}/edit',[App\Http\Controllers\SpecialtyController::class,'edit'])->name('edit'); 

Route::post('/specialties', [App\Http\Controllers\SpecialtyController::class,'store'])->name('store');//envia el formulario
Route::put('/specialties/{specialty}',[App\Http\Controllers\SpecialtyController::class,'update'])->name('update'); 
Route::delete('/specialties/{specialty}',[App\Http\Controllers\SpecialtyController::class,'destroy'])->name('destroy'); 


//doctor
Route::resource('/doctors','App\Http\Controllers\DoctorController');



