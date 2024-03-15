<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\PdfController;

// ! Jangan ubah route yang ada dalam group ini
Route::controller(AuthController::class)
    ->group(function () {
        Route::get('/', 'checkToken')->name('check');
        Route::get('/logout', 'logout')->name('logout'); // gunakan untuk logout
    });

/**
 * ! Jadikan route di bawah sebagai halaman utama dari web
 * ! harap tidak mengubah nilai pada name();
 */

Route::middleware('auth.token')
    ->group(function () {
        Route::get('/dashboard','App\Http\Controllers\HomeController@index')->name('dashboard');
    });

Route::middleware('auth.token')
    ->group(function () {
        // Route::get('/user', [UserController::class,'index'])->name('user');
        // Route::get('/user/add', [UserController::class,'add'])->name('user-add');
        // Route::post('/user/tambah', [UserController::class,'tambah'])->name('user-tambah');
        // Route::get('/user/detail/{id}', [UserController::class,'detail'])->name('user-detail');
        // Route::get('/user/editprofil/{id}', [UserController::class,'edit'])->name('user-edit');
        // Route::post('/user/update/{id}', [UserController::class,'update'])->name('user.update');
        // Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('user-hapus');
        Route::get('/verifikasi', [VerifikasiController::class,'index'])->name('verifikasi');
Route::get('/verifikasi/add', [VerifikasiController::class,'add'])->name('addverifikasi');
Route::post('/verifikasi/tambah', [VerifikasiController::class,'tambah'])->name('verifikasi-tambah');
Route::post('/verifikasi/edit', [VerifikasiController::class,'edit'])->name('verifikasi-edit');
Route::get('/barcode', [QRCodeController::class, 'index'])->name('barcode');
Route::post('/barcode/update/{id}', [QRCodeController::class,'update'])->name('barcode-update');
Route::get('/create', [QRCodeController::class, 'create'])->name('barcode-create');
Route::post('/barcode/tambah',[QRCodeController::class,'tambah'])->name('barcode-tambah');
Route::get('/barcode/hapus/{id}', [QRCodeController::class, 'hapus'])->name('barcode-hapus');

Route::get('/surat', [SuratController::class,'index'])->name('surat');
Route::get('/surat/add', [SuratController::class,'add'])->name('addsurat');
Route::post('/surat/tambah', [SuratController::class,'tambah'])->name('surat-tambah');
Route::get('/surat/hapus/{id}', [SuratController::class, 'hapus'])->name('surat-hapus');
Route::get('/editor', [EditorController::class, 'editor']);
Route::get('/verifikasi/seuts/{id}', [VerifikasiController::class,'seuts'])->name('seuts');
Route::get('/verifikasi/skka1/{id}', [VerifikasiController::class,'skka1'])->name('skka1');
Route::get('/verifikasi/pdfskka1/{id}', [VerifikasiController::class,'pdfskka1'])->name('pdfskka1');
Route::get('/verifikasi/skka2/{id}', [VerifikasiController::class,'skka2'])->name('skka2');
Route::get('/verifikasi/skka3/{id}', [VerifikasiController::class,'skka3'])->name('skka3');
Route::get('/verifikasi/seuas/{id}', [VerifikasiController::class,'seuas'])->name('seuas');
Route::get('/verifikasi/skkb1/{id}', [VerifikasiController::class,'skkb1'])->name('skkb1');
Route::get('/verifikasi/skkb2/{id}', [VerifikasiController::class,'skkb2'])->name('skkb2');


//ini darurat
    Route::get('/verifikasi/hapus/{id}', [VerifikasiController::class, 'hapus'])->name('verifikasi-hapus');

//darurat

Route::get('/verifikasi/SKKA1(dvv)/{id}', [VerifikasiController::class,'skka2'])->name('skka1dvv');
Route::get('/verifikasi/SKKA3(dvv)/{id}', [VerifikasiController::class,'skka3'])->name('skka3dvv');
Route::get('/verifikasi/SKKA2(dvv)/{id}', [VerifikasiController::class,'skka1'])->name('skka2dvv');
    });


// Route::middleware(['auth.token', 'auth.mahasiswa'])
//     ->group(function () {
//         Route::get('/verifikasi', [VerifikasiController::class,'index'])->name('verifikasi');
//     Route::get('/verifikasi/add', [VerifikasiController::class,'add'])->name('addverifikasi');
//     Route::post('/verifikasi/tambah', [VerifikasiController::class,'tambah'])->name('verifikasi-tambah');

//     });


// Route::middleware(['auth.token', 'auth.dosen'])
//     ->group(function () {
//         Route::get('/verifikasi', [VerifikasiController::class,'index'])->name('verifikasi');
//     Route::get('/verifikasi/add', [VerifikasiController::class,'add'])->name('addverifikasi');
//     Route::post('/verifikasi/tambah', [VerifikasiController::class,'tambah'])->name('verifikasi-tambah');
//     Route::get('/verifikasi/hapus/{id}', [VerifikasiController::class, 'hapus'])->name('verifikasi-hapus');
//     Route::get('/verifikasi/detail/{id}', [VerifikasiController::class,'detail'])->name('detail');


//     Route::get('pdf', [PdfController::class, 'index']);
//     });

    Route::get('/verifikasi/view/{id}', [VerifikasiController::class,'view'])->name('view');



/**
 * * Buat route-route baru di bawah ini
 * * Pastikan untuk selalu menggunakan middleware('auth.token')
 * * middleware tersebut digunakan untuk verifikasi access pengguna dengan web
 *
 * * Bisa juga ditambahkan dengan middleware lainnya.
 * * Berikut adalah beberapa middleware lain yang telah tersedia,
 * * dapat digunakan untuk mengatur akses route berdasarkan role user
 *
 * 1.) auth.admin -> biasa digunakan untuk akses route untuk manage user lain
 * 2.) auth.mahasiswa -> akses route untuk user dengan role mahasiswa
 * 3.) auth.dosen -> akses route untuk user dengan role dosen
 * 4.) auth.developer -> akses route untuk user developer
 *
 * ? contoh penggunaan: middleware(['auth.token', 'auth.mahasiswa'])
 */
