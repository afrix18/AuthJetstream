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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/hapus-user', function () {
        return '<h1>ini Halaman untuk menghapus user</h1>';
    })->middleware('permission:hapus-user');

    Route::get('/tambah-user', function () {
        return '<h1>ini Halaman menambahkan user</h1>';
    })->middleware('role:admin');

    Route::get('/homepage', function () {
        return '<h1>ini Halaman homepage</h1>';
    })->middleware('permission:homepage');
});
