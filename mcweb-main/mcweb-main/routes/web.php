<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;
use app\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ChangepasswordController;
use App\Http\Controllers\UbahprofileController;
use App\Http\Controllers\PsikologController;
use App\Http\Controllers\JanjiController;
use App\Http\Controllers\AdminjanjiController;
use App\Http\Controllers\ArticleHomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PsikologAdminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

// Route::get('/login', function () {
    //     return view('layouts/login');
    // });
    
    Route::get('/adminjanji', function () {
        return view('admin.jadwaljanji.adminjanji');
    });
    
    Route::get('/detailjanji', function () {
        return view('admin.jadwaljanji.detailjanji');
    });
    
    Route::get('/editpro', function () {
        return view('editpro');
    });
    
// Route::get('/adminarticle', function () {
// return view('layouts.adminarticle');
// });


// Route::get('/article', function () {
//     return view('article');
// });

#psikologadmin
Route::get('/psikolog', [PsikologAdminController::class, 'index'])->middleware(['auth'])->name('psikolog');
Route::get('/psikologadd', [PsikologAdminController::class, 'create'])->middleware(['auth'])->name('psikologadd');
Route::post('/addpsikolog', [PsikologAdminController::class, 'store'])->middleware(['auth'])->name('addpsikolog');
Route::get('/detailpsikolog/{id}', [PsikologAdminController::class, 'detail'])->middleware(['auth'])->name('detailpsikolog');
Route::get('/psikologedit/{id}', [PsikologAdminController::class, 'edit'])->middleware(['auth'])->name('psikologedit');
Route::post('/updatepsikolog/{id}', [PsikologAdminController::class, 'update'])->middleware(['auth'])->name('updatepsikolog');
Route::get('/psikologdelete/{id}', [PsikologAdminController::class, 'delete'])->middleware(['auth'])->name('psikologdelete');
// Route::get('/psikolog', function () {
    //     return view('layouts/psikolog');
    // });
    
#jadwal
Route::get('/psikologjadwaladd/{id}', [JadwalController::class, 'create'])->middleware(['auth'])->name('psikologjadwaladd');
Route::post('/jadwaladd/{id}', [JadwalController::class, 'store'])->middleware(['auth'])->name('jadwaladd');
Route::get('/jadwaldelete/{id}', [JadwalController::class, 'delete'])->middleware(['auth'])->name('jadwaldelete');

#kategori
Route::get('/kategori', [KategoriController::class, 'index'])->middleware(['auth'])->name('kategori');
Route::get('/kategoripsikologadd', [KategoriController::class, 'create'])->middleware(['auth'])->name('kategoripsikologadd');
Route::post('/kategoriadd', [KategoriController::class, 'store'])->middleware(['auth'])->name('kategoriadd');
Route::get('/kategoridelete/{id}', [KategoriController::class, 'delete'])->middleware(['auth'])->name('kategoridelete');

Route::get('/buatjanji', function () {
return view('layouts/buatjanji');
});

Route::get('/pembayaran', function () {
return view('layouts/pembayaran');
});

// Route::get('/profile', function () {
//     return view('profile');
// });

Route::get('/profile', [ProfileController::class, 'view'])->middleware(['auth'])->name('profile');

// Route::get('/home', function () {
    //     return view('welcome');
    // })->middleware(['auth'])->name('dashboard');
    
require __DIR__.'/auth.php';

Route::get('/editpasw', [ChangepasswordController::class, 'change_password']);
// Route::post('/editpasw/{id}', [ChangepasswordController::class, 'update_password']);
Route::resource('gantipw', ChangepasswordController::class);
Route::post('/tumkm_update/{id}',[TumkmController::class, 'update'])->name('tumkm_update');
Route::resource('editpro', UbahprofileController::class);
// Route::resource('buatjanji', JanjiController::class);
Route::resource('buatjanji', JanjiController::class);
Route::resource('article', ArticlehomeController::class);
Route::resource('articledetail', ArticlehomeController::class);
Route::resource('articlead', ArticleController::class);
Route::resource('pasienad', PasienController::class);

//login
Route::get('/home', [DashboardController::class, 'index'])->middleware(['auth'])->name('admindashboard');
Route::resource('psikologi', PsikologController::class);

// Auth::routes();


// Route::middleware(['auth'])->group(function () {

// Route::middleware(['admin:admin'])->group(function () {
Route::get('admin', [AdminController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });

 Route::resource('adminjanji', AdminjanjiController::class);
// Route::middleware(['user'])->group(function () {
//     Route::get('user', [UserController::class, 'index']);
// });
// });