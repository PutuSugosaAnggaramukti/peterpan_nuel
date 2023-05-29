<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tampilan_controller;
use App\Http\Controllers\daftar_controller;
use App\Http\Controllers\admin_controller;

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

route::get('/homepage','tampilan_controller@filterstatus');
route::get('/kalendar','tampilan_controller@indexkalendar');
route::get('/pageruangan','peminjam_controller@filterstatus');
route::get('/tambahruangan','admin_controller@indexadmin'); 
route::get('/datapeminjam','admin_controller@indexpeminjam'); 
route::get('/pagepeminjam','peminjam_controller@indexpeminjam');
Route::post('/addpengajuan','admin_Controller@addpengajuan');
Route::post('/pinjamruangan','peminjam_Controller@addpeminjam');
route::get('/prosesviewdata/{id}','admin_controller@findid');
route::get('/editruangan/{id}','admin_controller@edit_ruangan')->name('editruangan');
route::get('/deleteruangan/{id}','admin_controller@deleteruangan');
route::get('/loginmahasiswa','peminjam_controller@userlogin');
route::get('/filterruangan','admin_controller@filterstatus');
route::get('/validasi','admin_controller@indexvalidasi');