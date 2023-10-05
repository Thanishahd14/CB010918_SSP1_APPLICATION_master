<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,"index"]);

Route::get('/redirects',[HomeController::class,"redirects"]);

Route::get('/userview',[AdminController::class,"userview"]);

Route::post('/addproduct',[AdminController::class,"addproduct"]);

Route::get('/updateproductview/{id}',[AdminController::class,"updateproductview"]);

Route::get('/updateuserview/{id}',[AdminController::class,"updateuserview"]);

Route::post('/updateproduct/{id}',[AdminController::class,"updateproduct"]);

Route::post('/userupdate/{id}',[AdminController::class,"userupdate"]);

Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);

Route::get('/deleteproduct/{id}',[AdminController::class,"deleteproduct"]);

Route::get('/productview',[AdminController::class,"productview"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
