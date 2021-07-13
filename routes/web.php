<?php

use App\Http\Controllers\ImgController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('imgform', 'imageUpload');

Route::post('/save', [ImgController::class, 'store1']);
Route::post('/employee', [ImgController::class, 'store']);
Route::get('/show', [ImgController::class, 'index']);
Route::post('/update', [ImgController::class, 'update']);
// Route::view('/update', 'A');
