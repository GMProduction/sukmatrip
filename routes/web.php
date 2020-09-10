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
    return view('beranda');
});

Route::get('/pencarian', function () {
    return view('pencarian');
});

Route::get('/detail', function () {
    return view('detail');
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

Route::get('/admin/editpenginapan', function () {
    return view('admin.penginapan.editpenginapan');
});

Route::get('/admin/tour', function () {
    return view('admin.tour.tour');
});

Route::get('/admin/tambahtour', function () {
    return view('admin.tour.tambahtour');
});

Route::get('/admin/edittour', function () {
    return view('admin.tour.edittour');
});

Route::get('/admin/gallery', function () {
    return view('admin.gallery.gallery');
});

Route::get('/admin/tambahgallery', function () {
    return view('admin.gallery.tambahgallery');
});

Route::get('/admin/editgallery', function () {
    return view('admin.gallery.editgallery');
});

Route::get('/admin/artikel', function () {
    return view('admin.artikel.artikel');
});

Route::get('/admin/tambahartikel', function () {
    return view('admin.artikel.tambahartikel');
});

Route::get('/admin/editartikel', function () {
    return view('admin.artikel.editartikel');
});

Route::get('/admin/detailartikel', function () {
    return view('admin.artikel.detailartikel');
});

Route::get('/admin/destinasi', function () {
    return view('admin.destinasi.destinasi');
});

Route::get('/admin/paket', function () {
    return view('admin.paket.paket');
});

Route::get('/admin/tambahpaket', function () {
    return view('admin.paket.tambahpaket');
});

Route::get('dropzone', 'DropzoneController@dropzone');
Route::post('dropzone/penginapan', 'DropzoneController@dropzonePenginapan')->name('dropzone.penginapan');
Route::post('dropzone/tour', 'DropzoneController@dropzoneTour')->name('dropzone.tour');
Route::get('/admin/editpaket', function () {
    return view('admin.paket.editpaket');
});

Route::get('/admin/detailpaket', function () {
    return view('admin.paket.detailpaket');
});

Route::get('/admin/transaksi', function () {
    return view('admin.transaksi.transaksi');
});
