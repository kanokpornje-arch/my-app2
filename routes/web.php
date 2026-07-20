<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/about2', [AdminController::class, 'about2'])
    ->name('about2');

Route::get('/blog2', [AdminController::class, 'blog2'])
    ->name('blog2');

Route::get('/form', [AdminController::class, 'form'])
    ->name('form');

Route::post('/insert', [AdminController::class, 'insert'])
    ->name('claim.store');   // <-- แก้ตรงนี้

Route::get('/test-db', function () {

    try {

        DB::connection()->getPdo();

        return "เชื่อมต่อฐานข้อมูลสำเร็จ : "
            . DB::connection()->getDatabaseName();

    } catch (\Exception $e) {

        return $e->getMessage();

    }

});