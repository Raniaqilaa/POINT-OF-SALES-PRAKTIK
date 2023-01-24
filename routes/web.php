<?php
// ini adalah controller rombel 
use App\Http\Controllers\RombelController;
// ini adalah controller siswa
use App\Http\Controllers\SiSwaController;
// ini adalah controller rayon
use App\Http\Controllers\RayonController;
// ini adalah controller merk
use App\Http\Controllers\MerkController;
// ini adalah controller distributor
use App\Http\Controllers\DistributorController;
// ini adalah controller barang
use App\Http\Controllers\BarangController;
// ini adalah controller transaksi
use App\Http\Controllers\TransaksiController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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


// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/', function () {
    return view('welcome');
    });

Route::get('index', function () {
    return view('index');
    });

    Route::get('/merk', function () {
        return view('index');
    });
    Route::get('/', function () {
            return view('index');

    });
     
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);



// ini adalah route siswa
Route::resource('siswas',SiswaController::class);
// ini adalah route rombel
Route::resource('rombels',RombelController::class);
// ini adalah route rayon
Route::resource('rayons',RayonController::class);
// ini adalah route merk
Route::resource('merks',MerkController::class);
// ini adalah route distributor
Route::resource('distributors',DistributorController::class);
// ini adalah route barang
Route::resource('barangs',BarangController::class);
// ini adalah route transaksi
Route::resource('transaksis',TransaksiController::class);



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login',[App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');