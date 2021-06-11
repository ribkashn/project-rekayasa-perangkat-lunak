<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KoorController;
use App\Http\Controllers\KpController;
use App\Http\Controllers\PkpController;
use App\Http\Controllers\SkpController;
use App\Http\Controllers\ujianController;
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
    return view('login');
});

//mahasiswa
Route::group(['middleware' => 'mahasiswa'], function (){

    Route::get('/mhs',[MahasiswaController::class,'index']);//tampilkan view layout master menu mhs
    //profile
    Route::get('/profile',[MahasiswaController::class,'mahasiswa']);//tampilkan profile laman
    Route::post('/mhs/simpan',[MahasiswaController::class,'simpan']);
    Route::get('/mhs/editmhs/{id_mhs}',[MahasiswaController::class,'edit']); // edit data   
    Route::post('/mhs/update/{id_mhs}',[MahasiswaController::class,'update']); // simpan edit  data 



    Route::get('/kp',[KpController::class,'index']); // tampilkan laman kp------------------
    Route::get('/kp/input',[KpController::class,'input']); // menuju laman tambah
    Route::post('/kp/simpan',[KpController::class,'simpan']); // simpan data  
    Route::get('/kp/editkp/{id_kp}',[KpController::class,'edit']); // edit data kp  
    Route::post('/kp/update/{id_kp}',[KpController::class,'update']); // simpan edit  data kp  
    Route::get('/kp/deletekp/{id_kp}',[KpController::class,'delete']); // hapus data kp  

    Route::get('/pkp',[PkpController::class,'index']); // tampilkan laman pkp----------------
    Route::get('/pkp/input',[PkpController::class,'input']); // menuju laman tambah
    Route::post('/pkp/simpan',[PkpController::class,'simpan']); // simpan data  
    Route::get('/pkp/editpkp/{id_pkp}',[PkpController::class,'edit']); // edit data pkp  
    Route::post('/pkp/update/{id_pkp}',[PkpController::class,'update']); // simpan edit  data pkp  
    Route::get('/pkp/deletepkp/{id_pkp}',[PkpController::class,'delete']); // hapus data pkp  


    Route::get('/skp',[SkpController::class,'index']); // tampilkan laman surat ket---------
    Route::get('/skp/input',[SkpController::class,'input']); // menuju laman tambah
    Route::post('/skp/simpan',[SkpController::class,'simpan']); // simpan data 
    Route::get('/kp_ujian',[ujianController::class,'index']); // tampilkan laman ujian------------------
    Route::get('/pkp_ujian',[ujianController::class,'index_pkp']); // tampilkan laman ujian------------------
});
Auth::routes();

// Dosen
Route::group(['middleware' => 'dosen'], function (){
    Route::get('/dsn',[DosenController::class,'index']);//tampilkan view layout master menu dsn
    //daftar bimbingan
    Route::get('/kp_bimbingan',[DosenController::class,'kp_bimbingan']);
    Route::get('/kp_bimbingan/edit/{id_kp}',[DosenController::class,'bimbinganKP']); // edit data kp  
    Route::post('/kp_bimbingan/update/{id_kp}',[DosenController::class,'bimbingan_update_kp']); // simpan edit  data kp   

    Route::get('/pkp_bimbingan',[DosenController::class,'pkp_bimbingan']);
    Route::get('/pkp_bimbingan/edit/{id_pkp}',[DosenController::class,'bimbinganPKP']); // edit data kp  
    Route::post('/pkp_bimbingan/update/{id_pkp}',[DosenController::class,'bimbingan_update_pkp']); // simpan edit  data kp   
    //ujian 
    Route::get('/daf_ujian_kp',[DosenController::class,'daf_ujianKP']);
    Route::get('/daf_ujian_pkp',[DosenController::class,'daf_ujianPKP']);
});
//Koordinator
Route::group(['middleware' => 'koordinator'], function (){
    Route::get('/koor',[KoorController::class,'index']);
    //verif skp
    Route::get('/verifikasi_skp',[KoorController::class,'verifikasiSKP']); // menampilkan data skp
    Route::get('/verifikasi_skp/editskp/{id_skp}',[KoorController::class,'statusSKP']); // munculkasn form edit status
    Route::post('/verifikasi_skp/update/{id_skp}',[KoorController::class,'update_skp']); // simpan edit  data skp  
    //verif kp
    Route::get('/verifikasi_kp',[KoorController::class,'verifikasiKP']); // menampilkan data kp
    Route::get('/verifikasi_kp/editkp/{id_kp}',[KoorController::class,'statusKP']); // munculkasn form edit status
    Route::post('/verifikasi_kp/update/{id_kp}',[KoorController::class,'update_kp']); // simpan edit  data kp  
    //verif pkp
    Route::get('/verifikasi_pkp',[KoorController::class,'verifikasiPKP']); //
    Route::get('/verifikasi_pkp/editpkp/{id_pkp}',[KoorController::class,'statusPKP']); // simpan edit  data pkp  
    Route::post('/verifikasi_pkp/update/{id_pkp}',[KoorController::class,'update_pkp']);

    
    //set up batas kp
    Route::get('/batas_kp',[KoorController::class,'batas_kp']);
    Route::get('/batas_kp/edit/{id_kp}',[KoorController::class,'setKP']); // edit data kp  
    Route::post('/batas_kp/update/{id_kp}',[KoorController::class,'update_setkp']); // simpan edit  data kp

    Route::get('/batas_pkp',[KoorController::class,'batas_pkp']);
    Route::get('/batas_pkp/edit/{id_pkp}',[KoorController::class,'setPKP']); // edit data kp  
    Route::post('/batas_pkp/update/{id_pkp}',[KoorController::class,'update_setpkp']); // simpan edit  data kp
    // jadwal ujian
    Route::get('/ujian_kp',[KoorController::class,'ujianKP']);
    Route::get('/ujian_kp/edit/{id_kp}',[KoorController::class,'edit_ujianKP']); // edit data kp  
    Route::post('/ujian_kp/update/{id_kp}',[KoorController::class,'update_ujiankp']); // simpan edit  data kp

    Route::get('/ujian_pkp',[KoorController::class,'ujianPKP']);
    Route::get('/ujian_pkp/edit/{id_pkp}',[KoorController::class,'edit_ujianPKP']); // edit data kp  
    Route::post('/ujian_pkp/update/{id_pkp}',[KoorController::class,'update_ujianpkp']); // simpan edit  data kp
    // registrasi
    Route::get('/regis_kp',[KoorController::class,'regis_kp']);
    Route::get('/regis_pkp',[KoorController::class,'regis_pkp']);


    
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
