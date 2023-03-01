<?php

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
//
//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [\App\Http\Controllers\WebsiteController::class, 'index'])->name('home');


Route::middleware('auth:web')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/', \App\Http\Controllers\Admin\AdminController::class);
    Route::get('/logout/{user}' , [\App\Http\Controllers\Admin\AdminController::class ,'logout'])->name('logout');
    Route::prefix('profile')->name('profile.')->group(function (){
       Route::get('/edit/{user}' , [\App\Http\Controllers\Admin\ProfileController::class ,'edit'])->name('edit');
       Route::POST('/update/{user}' , [\App\Http\Controllers\Admin\ProfileController::class ,'update'])->name('update');
       Route::POST('/updateImage/{user}' , [\App\Http\Controllers\Admin\ProfileController::class ,'updateImage'])->name('image');
    });
    Route::prefix('project')->name('project.')->group(function (){
        Route::get('/index' , [\App\Http\Controllers\Admin\ProjectController::class ,'index'])->name('index');
        Route::get('/create' , [\App\Http\Controllers\Admin\ProjectController::class ,'create'])->name('create');
       Route::get('/edit/{project}' , [\App\Http\Controllers\Admin\ProjectController::class ,'edit'])->name('edit');
       Route::get('/delete/{project}' , [\App\Http\Controllers\Admin\ProjectController::class ,'destroy'])->name('destroy');
       Route::POST('/update/{project}' , [\App\Http\Controllers\Admin\ProjectController::class ,'update'])->name('update');
       Route::POST('/updateImage/{project}' , [\App\Http\Controllers\Admin\ProjectController::class ,'updateImage'])->name('image');
       Route::POST('/store/' , [\App\Http\Controllers\Admin\ProjectController::class ,'store'])->name('store');
    });
    Route::prefix('mail')->name('mail.')->group(function (){
        Route::get('/index' , [\App\Http\Controllers\Admin\MailController::class ,'index'])->name('index');
        Route::get('/create' , [\App\Http\Controllers\Admin\MailController::class ,'create'])->name('create');
       Route::get('/edit/{mail}' , [\App\Http\Controllers\Admin\MailController::class ,'edit'])->name('edit');
       Route::get('/delete/{mail}' , [\App\Http\Controllers\Admin\MailController::class ,'destroy'])->name('destroy');
       Route::POST('/update/{mail}' , [\App\Http\Controllers\Admin\MailController::class ,'update'])->name('update');
       Route::POST('/updateImage/{mail}' , [\App\Http\Controllers\Admin\MailController::class ,'updateImage'])->name('image');
       Route::POST('/store' , [\App\Http\Controllers\Admin\MailController::class ,'store'])->name('store');
       Route::get('/view/{mail}' , [\App\Http\Controllers\Admin\MailController::class ,'view'])->name('view');
    });
});

