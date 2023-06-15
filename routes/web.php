<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DilanPolresController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SkckOnlineController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/berita/create', [AdminController::class, 'index'])->name('admin.berita.create');
    // Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    // Route::get('/roles', [AdminController::class, 'roles'])->name('admin.roles');
    // Route::get('/permissions', [AdminController::class, 'permissions'])->name('admin.permissions');
});

Route::group(['prefix' => 'admin/skck', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [SkckOnlineController::class, 'index'])->name('admin.skck.index');
    Route::post('/skck/datatable', [SkckOnlineController::class, 'dataTable'])->name('admin.skck.datatable');
    Route::get('/skck/detail/{id}', [SkckOnlineController::class, 'detail'])->name('admin.skck.detail');
});



Route::group(['prefix' => 'admin/berita', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/create', [BeritaController::class, 'index'])->name('admin.berita.create');
});

Route::group(['prefix' => 'dilanpolres'], function() {
    Route::get('/', [DilanPolresController::class, 'index'])->name('dilanpolres.index');
    Route::get('/daftarskck', [DilanPolresController::class, 'daftarSkck'])->name('dilanpolres.daftarskck');
    Route::get('/laporanprovost', [DilanPolresController::class, 'laporanProvost'])->name('dilanpolres.laporanprovost');
    Route::get('/izinkeramaian', [DilanPolresController::class, 'izinKeramaian'])->name('dilanpolres.izinkeramaian');
    Route::get('/pengaduanmasyarakat', [DilanPolresController::class, 'pengaduanMasyarakat'])->name('dilanpolres.pengaduanmasyarakat');
    Route::get('/pengawalanbendaberharga', [DilanPolresController::class, 'pengawalanBendaBerharga'])->name('dilanpolres.pengawalanbendaberharga');
    Route::get('/pengawalantahanan', [DilanPolresController::class, 'pengawalanTahanan'])->name('dilanpolres.pengawalantahanan');
});




require __DIR__.'/auth.php';