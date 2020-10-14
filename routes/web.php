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

Route::get('/', 'Main\MainController@index');

Route::get('/pencarian', 'Main\MainController@search');
Route::get('/ajax-search-products', 'Main\MainController@ajaxSearch');

Route::get('/detail/{id}', 'Main\MainController@detail');
Route::post('/transaction-submit', 'Main\TransactionController@saveTransaction');

//LOGIN
Route::get('/login', function () {
    return view('login.login');
});
Route::post('/post-login', 'Auth\AuthController@login');


//ADMIN
Route::get('/admin', function () {
    return view('admin.dashboard');
});


Route::get('/admin/tambahpenginapan','PenginapanController@pageAdd');
Route::post('/admin/tambahpenginapan','PenginapanController@pageAdd');

Route::get('/admin/penginapan/datatable', 'PenginapanController@datatable');
Route::get('/admin/penginapan', 'PenginapanController@index');
Route::post('/admin/penginapan', 'PenginapanController@index');
Route::get('/admin/penginapan/edit/{id}', 'PenginapanController@edit');
Route::post('/admin/penginapan/edit/{id}', 'PenginapanController@edit');
Route::post('/admin/penginapan/delete/{id}', 'PenginapanController@delete');

Route::get('/admin/tour/datatable', 'TourController@datatable');
Route::get('/admin/tour', 'TourController@index');

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

Route::get('/admin/destinasi', 'DestinasiController@index');
Route::post('/admin/destinasi', 'DestinasiController@index');
Route::post('/admin/destinasi/delete/{id}', 'DestinasiController@delete');
Route::get('/admin/destinasi/datatable', 'DestinasiController@datatable');

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


Route::get('/logout', 'Auth\AuthController@logout');
