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
Route::get('/admin/get-penginapan', 'DashboardController@getPenginapan');
Route::get('/admin/get-tour', 'DashboardController@getTour');
Route::get('/admin/get-paket', 'DashboardController@getPaket');

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
Route::post('/post-login', 'Auth\AuthController@login');


//ADMIN
Route::group(['middleware' => 'IfNotLogin' ], function (){
    Route::get('/admin', 'DashboardController@index');

});


Route::get('/admin/penginapan/add','PenginapanController@pageAdd');
Route::post('/admin/penginapan/add','PenginapanController@pageAdd');

Route::get('/admin/penginapan/datatable', 'PenginapanController@datatable');
Route::get('/admin/penginapan', 'PenginapanController@index');
Route::post('/admin/penginapan', 'PenginapanController@index');
Route::get('/admin/penginapan/edit/{id}', 'PenginapanController@edit');
Route::post('/admin/penginapan/edit/{id}', 'PenginapanController@edit');
Route::post('/admin/penginapan/delete/{id}', 'PenginapanController@delete');

Route::get('/admin/tour/datatable', 'TourController@datatable');
Route::get('/admin/tour', 'TourController@index');
Route::get('/admin/tour/add', 'TourController@pageAdd');
Route::post('/admin/tour/add', 'TourController@pageAdd');
Route::get('/admin/tour/edit/{id}', 'TourController@pageEdit');
Route::post('/admin/tour/edit/{id}', 'TourController@pageEdit');

Route::get('/admin/gallery/datatable', 'GalleryController@datatable');
Route::get('/admin/gallery', 'GalleryController@index');
Route::get('/admin/gallery/add', 'GalleryController@pageAdd');
Route::post('/admin/gallery/add', 'GalleryController@pageAdd');
Route::get('/admin/gallery/edit/{id}', 'GalleryController@pageedit');
Route::post('/admin/gallery/edit/{id}', 'GalleryController@pageedit');

Route::get('/admin/artikel/datatable', 'ArticleController@datatable');
Route::get('/admin/artikel', 'ArticleController@index');
Route::get('/admin/artikel/add', 'ArticleController@pageAdd');
Route::post('/admin/artikel/add', 'ArticleController@pageAdd');
Route::get('/admin/artikel/edit/{id}', 'ArticleController@pageEdit');
Route::post('/admin/artikel/edit/{id}', 'ArticleController@pageEdit');
Route::get('/admin/artikel/detail/{id}', 'ArticleController@pageEdit');

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
