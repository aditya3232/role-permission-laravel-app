<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DilanPolresController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SkckOnlineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormSidikJariController;
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
    Route::get('/create', [PermissionController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [PermissionController::class, 'edit'])->name('edit');
    Route::post('/store', [PermissionController::class, 'store'])->name('store');
    Route::post('/update/{id}', [PermissionController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [PermissionController::class, 'destroy'])->name('destroy');
});

// roles
Route::group(['prefix' => 'admin/roles', 'as' => 'admin.roles.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::post('/datatable', [RoleController::class, 'dataTable'])->name('datatable');
    Route::get('/create', [RoleController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
    Route::post('/store', [RoleController::class, 'store'])->name('store');
    Route::post('/update/{id}', [RoleController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [RoleController::class, 'destroy'])->name('destroy');
});

// users
Route::group(['prefix' => 'admin/users', 'as' => 'admin.users.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/datatable', [UserController::class, 'dataTable'])->name('datatable');
});

// skck online
Route::group(['prefix' => 'admin/skck', 'as' => 'admin.skck.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [SkckOnlineController::class, 'index'])->name('index');
    Route::post('/datatable', [SkckOnlineController::class, 'dataTable'])->name('datatable');
    Route::get('/detail/{id}', [SkckOnlineController::class, 'detail'])->name('detail');
    Route::post('/post', [SkckOnlineController::class, 'post'])->name('post');
});

// berita
Route::group(['prefix' => 'admin/berita', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/create', [BeritaController::class, 'index'])->name('admin.berita.create');
});

// dilanpolres home
Route::group(['prefix' => 'dilanpolres', 'as' => 'dilanpolres.'], function() {
    Route::get('/', [DilanPolresController::class, 'index'])->name('index');
    Route::get('/formsidikjari', [DilanPolresController::class, 'formSidikJari'])->name('formsidikjari');
});

// form sidik jari in dilanpolres
Route::group(['prefix' => 'dilanpolres/formsidikjari', 'as' => 'dilanpolres.formsidikjari.'], function() {
    Route::get('/create', [FormSidikJariController::class, 'create'])->name('create');
    Route::post('/store', [FormSidikJariController::class, 'store'])->name('store');
});

// form sidik jari in admin
Route::group(['prefix' => 'admin/formsidikjari', 'as' => 'admin.formsidikjari.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [FormSidikJariController::class, 'index'])->name('index');
    Route::post('/datatable', [FormSidikJariController::class, 'dataTable'])->name('datatable');
    Route::get('/detail/{id}', [FormSidikJariController::class, 'detail'])->name('detail');
});


require __DIR__.'/auth.php';