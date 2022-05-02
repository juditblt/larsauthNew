<?php

use App\Http\Controllers\GalleryAdminController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

Route::get('/', [GalleryController::class, 'index'])->name('index');
Route::get('/dashboard',[GalleryAdminController::class, 'dashboard'])->name('dashboard');

Route::get('/upload', [GalleryAdminController::class, 'upload'])->name('upload');
Route::post('/upload', [GalleryAdminController::class, 'store'])->name('store');

Route::get('/details/{id}', [GalleryController::class, "details"])->name('details');

Route::get('/user', function (){
    var_dump(Auth::user());    // user()->name vagy id vagy email stb.
})->middleware('auth');

require __DIR__.'/auth.php';
