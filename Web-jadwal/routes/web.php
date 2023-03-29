<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Models\Jadwal;
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

Route::get('/home', [JadwalController::class, 'home'])->name('home');

//tambah data
Route::get('/home/create', [JadwalController::class, 'create'])->name('create');
Route::post('/home-store', [JadwalController::class, 'store'])->name('store');


//edit data
Route::get('/jadwal/edit/{id}', [JadwalController::class, 'edit'])->name('edit');
Route::patch('/home/{id}', [JadwalController::class, 'update'])->name('update');
Route::delete('/home/{id}', [JadwalController::class, 'delete'])->name('delete');