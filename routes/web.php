<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
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

Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
Route::get('/admin/parts', [AdminController::class, 'spare_parts'])->name('admin.part');
Route::get('/admin/add-parts', [AdminController::class, 'addGallery'])->name('admin.addCar');
Route::post('/admin/save-parts',[AdminController::class,'saveData'])->name('admin.saveCar');
Route::get('/admin/edit-parts/{id}', [AdminController::class, 'editGallery'])->name('gallery-edit');
Route::put('/admin/update-parts/{id}',[AdminController::class,'updateCar'])->name('admin.editCar');
Route::delete('/admin/delete-parts/{id}', [AdminController::class, 'deleteCar'])->name('admin.deleteCar');
Route::get('/admin/gallery', [AdminController::class, 'gallery_index'])->name('admin.gallery');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('home', [PageController::class, 'home'])->name('home');
Route::get('about-us', [PageController::class, 'about'])->name('about');
Route::get('services', [PageController::class, 'service'])->name('service');
Route::get('contact-us', [PageController::class, 'contact'])->name('contact');


Route::get('login', [PageController::class, 'login'])->name('login-page');

