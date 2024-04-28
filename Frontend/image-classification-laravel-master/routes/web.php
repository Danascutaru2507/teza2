<?php

use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\Event\EventController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\UserController;
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

//User
Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/blog', [UserController::class, 'blog'])->name('blog');
Route::get('/map', [UserController::class, 'map'])->name('map');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/upload-file', [UserController::class, 'uploadFile'])->name('upload');
Route::get('/result', [UserController::class, 'showResult'])->name('result');



Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//Admin
Route::group(['namespace' => 'Admin', 'middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\MainController::class, 'dashboard'])->name('admin.dashboard');

    //Event
    Route::group(['namespace' => 'Event', 'prefix' => 'event'], function () {
        Route::get('create', [EventController::class, 'index'])->name('admin.event.create');
        Route::post('store', [EventController::class, 'store'])->name('admin.event.store');
        Route::get('list', [EventController::class, 'list'])->name('admin.event.list');
        Route::get('edit/{id}', [EventController::class, 'edit'])->name('admin.event.edit');
        Route::put('update/{id}', [EventController::class, 'update'])->name('admin.event.update');
        Route::delete('delete/{id}', [EventController::class, 'delete'])->name('admin.event.delete');
    });

    //Blog
    Route::group(['namespace' => 'Blog', 'prefix' => 'blog'], function () {
        Route::get('create', [BlogController::class, 'index'])->name('admin.blog.create');
        Route::post('store', [BlogController::class, 'store'])->name('admin.blog.store');
        Route::get('list', [BlogController::class, 'list'])->name('admin.blog.list');
        Route::get('edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
        Route::put('update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
        Route::delete('delete/{id}', [BlogController::class, 'delete'])->name('admin.blog.delete');
    });

});
