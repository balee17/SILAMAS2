<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Controllers\IndexController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\SearchController;

use App\Http\Controllers\ReportingController;

use App\Http\Controllers\DashboardUserController;



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
Route::get('/', [IndexController::class, 'index'])->middleware('guest');

// Route::get('/', function () {

//     return view('welcome');
// });
// Route::get('/', [HomeController::class, 'welcome']);

// // Route::resource('laporans', ReportsController::class);
// Route::resource('laporans', ReportingController::class)->middleware('auth');

// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [UserController::class, 'index']);
// Route::post('/register', [UserController::class, 'store']);


// Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');

// Route::post('/profile', [UserController::class, 'update'])->middleware('auth');

// Route::get('/search', [SearchController::class, 'search']);


// Route::get('/myreport', [MyReportsController::class, 'index'])->middleware('auth');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('admin', function () { return view('auth.admin.dashboard'); })->middleware('CheckRoleUsers:admin');
// Route::get('petugas', function () { return view('auth.petugas.petugas'); })->middleware(['CheckRoleUsers:petugas,admin']);
// Route::get('/', function () { return view('index'); })->middleware(['CheckRoleUsers:user']);
