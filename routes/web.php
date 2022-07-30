<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\SubCriteriaController;
// use App\Http\Controllers\Admin\ComparisonsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RumahController;
use App\Http\Controllers\Admin\HasilController;
use App\Http\Controllers\Admin\AhpController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/login', function () {
//     return view('admin/package/page-login');
// });

// Route::get('/home', function () {
//     return view('customer/package/index');
// });
// Route::get('/test', function () {
//     return view('customer/package/portfolio-details');
// });

//HOME
Route::get('/', [CustomerController::class, 'index']);
Route::post('/postaltuser', [AhpController::class, 'postaltuser'])->name('postaltuser');

//LOGIN
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// REGISTER
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/postregister', [LoginController::class, 'postregister'])->name('postregister');

// ADMIN
Route::group(['middleware' => ['auth', 'cekrole:Admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);

    // DATA USER
    Route::get('/admin/user', [UserController::class, 'index']);
    Route::get('/admin/user/form', [UserController::class, 'tampilform']);
    Route::post('/admin/user/form/postuser', [UserController::class, 'postuser'])->name('postuser');
    Route::get('/admin/user/formedit/{id}', [UserController::class, 'tampiledituser'])->name('edituser');
    Route::post('/admin/user/formedit/updateuser/{id}', [UserController::class, 'updateuser'])->name('updateuser');
    Route::get('/admin/user/hapususer/{id}', [UserController::class, 'deluser'])->name('hapususer');

    // DATA RUMAH (Alternative::modele)
    Route::get('/admin/rumah', [RumahController::class, 'index']);
    Route::get('/admin/rumah/form', [RumahController::class, 'tampilform']);
    Route::post('/admin/rumah/form/postrumah', [RumahController::class, 'postrumah'])->name('postrumah');
    Route::get('/admin/rumah/formedit/{id}', [RumahController::class, 'tampileditrumah'])->name('editrumah');
    Route::post('/admin/rumah/formedit/updaterumah/{id}', [RumahController::class, 'updaterumah'])->name('updaterumah');
    Route::get('/admin/rumah/hapusrumah/{tipe}', [RumahController::class, 'delrumah'])->name('hapusrumah');

    // DATA KRITERIA
    Route::get('/admin/kriteria', [CriteriaController::class, 'index']);
    Route::get('/admin/kriteria/form', [CriteriaController::class, 'tampilform']);
    Route::post('/admin/kriteria/form/postkriteria', [CriteriaController::class, 'postkriteria'])->name('postkriteria');
    Route::get('/admin/kriteria/formedit/{id}', [CriteriaController::class, 'tampileditkriteria'])->name('editkriteria');
    Route::post('/admin/kriteria/formedit/updatekriteria/{id}', [CriteriaController::class, 'updatekriteria'])->name('updatekriteria');

    // Data Nilai Kriteria (Sub Kriteria)
    Route::get('/admin/sub', [SubCriteriaController::class, 'index']);
    Route::get('/admin/sub/form', [SubCriteriaController::class, 'tampilform']);
    Route::post('/admin/sub/form/postsub', [SubCriteriaController::class, 'postsub'])->name('postsub');
    Route::get('/admin/sub/formedit/{id}', [SubCriteriaController::class, 'tampileditsub'])->name('editsub');
    Route::post('/admin/sub/formedit/updatesub/{id}', [SubCriteriaController::class, 'updatesub'])->name('updatesub');
    Route::get('/admin/sub/hapussub/{id}', [SubCriteriaController::class, 'delsub'])->name('hapussub');

    // Data Alternative
    Route::get('/admin/alternative', [AhpController::class, 'tampilalternative']);
    Route::post('/admin/alternative/postalt', [AhpController::class, 'postalt'])->name('postalt');

    // ~~~~~~~~~~~~~~
    // Route::get('/admin/ahp', [AhpController::class, 'index']);
    // Route::get('/admin/ahp/perhitungan', [AhpController::class, 'indexperhitungan']);
    // Route::get('/admin/ahp/hasil', [AhpController::class, 'indexhasil']);
});

//CUSTOMER
Route::group(['middleware' => ['auth', 'cekrole:Admin,Customer']], function () {
    Route::get('/home', [CustomerController::class, 'indexlogin']);
    Route::get('/detail/{tipe}', [HasilController::class, 'tampildetail']);


    // Data Alternative
    // Route::get('/home', [AhpController::class, 'tampilalternativeuser']);
    Route::post('/home/postaltuser', [AhpController::class, 'postaltuserlogin'])->name('postaltuserlogin');

    // Perhitungan AHP Admin
    Route::get('/ahp/bobot', [AhpController::class, 'indexbobot']);
    Route::post('/ahp/bobot/postbobot', [AhpController::class, 'postbobot'])->name('postbobot');
    Route::post('/ahp/bobot/postmatriks', [AhpController::class, 'postmatriks'])->name('postmatriks');
    Route::post('/ahp/bobot/postmatriks2', [AhpController::class, 'postmatriks2'])->name('postmatriks2');
    Route::post('/ahp/bobot/cekkonsistensi', [AhpController::class, 'cekkonsistensi'])->name('cekkonsistensi');
    Route::post('/ahp/bobot/posthasilrekomendasi', [AhpController::class, 'posthasilrekomendasi'])->name('posthasilrekomendasi');
    Route::get('/ahp/bobot/kesimpulan/{tipe}', [HasilController::class, 'tampilkesimpulan']);

    // Cetak PDF
    Route::get('/ahp/bobot/kesimpulan/cetak/{tipe}', [HasilController::class, 'cetakpdf']);


    // Modal Reset Password
    Route::get('/profil/reset', [CustomerController::class, 'tampilmodal']);
    Route::post('/home/{password}', [CustomerController::class, 'ubahpassword'])->name('ubahpassword');
});
