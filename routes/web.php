<?php

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

//LOGIN
Route::get('/login', function () {
    return view('login.login');
});

//ADMIN
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/penginapan', function () {
    return view('admin.penginapan.penginapan');
});

Route::get('/admin/tambahpenginapan', function () {
    return view('admin.penginapan.tambahpenginapan');
});

Route::get('/admin/tour', function () {
    return view('admin.tour.tour');
});

Route::get('/admin/tambahtour', function () {
    return view('admin.tour.tambahtour');
});

Route::get('/admin/gallery', function () {
    return view('admin.gallery.gallery');
});

Route::get('/admin/tambahgallery', function () {
    return view('admin.gallery.tambahgallery');
});

Route::get('/admin/artikel', function () {
    return view('admin.artikel.artikel');
});

Route::get('/admin/tambahartikel', function () {
    return view('admin.artikel.tambahartikel');
});
