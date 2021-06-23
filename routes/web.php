<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PDFMakerController;
use App\Http\Controllers\BargraphController;

use App\Http\Controllers\ChartController;
use App\Http\Controllers\StoreImageController;


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
//     return view('welcome');
// });

Route::get('/', [StudentController:: class, 'index'])->name('home');
Route::get('/create', [StudentController:: class, 'create'])->name('create');

Route::post('/create', [StudentController:: class, 'store'])->name('store');

Route::get('/edi/{id}', [StudentController:: class, 'edit'])->name('edit');

Route::post('/update{id}', [StudentController:: class, 'update'])->name('update');

Route::delete('/delete{id}', [StudentController:: class, 'delete'])->name('delete');

Route::get('/pdf', [PDFMakerController:: class, 'gen']);

Route::get('/bargraph', [BargraphController:: class, 'bargraph']);

Route::get('/chart', [ChartController::class, 'index']);



// Route::get('/hello', function () {
//     return "Hello World";
// });


// Route::get('/', [StoreImageController:: class, 'index'])->name('index');


Route::post('/store_image/insert_image', [StoreImageController:: class, 'insert_image']);

Route::get('/store_image/fetch_image/{id}', [StoreImageController:: class, 'fetch_image']);



