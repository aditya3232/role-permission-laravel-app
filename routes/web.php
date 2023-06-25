<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DilanPolresController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
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


// admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/berita/create', [AdminController::class, 'index'])->name('berita.create');
});

// permissions
Route::group(['prefix' => 'admin/permissions', 'as' => 'admin.permissions.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/',[ PermissionController::class, 'index'])->name('index');
    Route::post('/datatable', [PermissionController::class, 'dataTable'])->name('datatable');
});

// roles
Route::group(['prefix' => 'admin/roles', 'as' => 'admin.roles.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::post('/roles/datatable', [RoleController::class, 'dataTable'])->name('datatable');
});

// skck online
Route::group(['prefix' => 'admin/skck', 'as' => 'admin.skck.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [SkckOnlineController::class, 'index'])->name('index');
    Route::post('/datatable', [SkckOnlineController::class, 'dataTable'])->name('datatable');
    Route::get('/detail/{id}', [SkckOnlineController::class, 'detail'])->name('detail');
    Route::post('/post', [SkckOnlineController::class, 'post'])->name('post');
});



Route::group(['prefix' => 'admin/berita', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/create', [BeritaController::class, 'index'])->name('admin.berita.create');
});

// create data semua disini
Route::group(['prefix' => 'dilanpolres', 'as' => 'dilanpolres.'], function() {
    Route::get('/', [DilanPolresController::class, 'index'])->name('index');
    Route::get('/daftarskck', [DilanPolresController::class, 'daftarSkck'])->name('daftarskck');
    Route::get('/laporanprovost', [DilanPolresController::class, 'laporanProvost'])->name('laporanprovost');
    Route::get('/izinkeramaian', [DilanPolresController::class, 'izinKeramaian'])->name('izinkeramaian');
    Route::get('/pengaduanmasyarakat', [DilanPolresController::class, 'pengaduanMasyarakat'])->name('pengaduanmasyarakat');
    Route::get('/pengawalanbendaberharga', [DilanPolresController::class, 'pengawalanBendaBerharga'])->name('pengawalanbendaberharga');
    Route::get('/pengawalantahanan', [DilanPolresController::class, 'pengawalanTahanan'])->name('pengawalantahanan');
});







require __DIR__.'/auth.php';