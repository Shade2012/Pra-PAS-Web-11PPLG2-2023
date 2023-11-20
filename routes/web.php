<?php

use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\Http\Controllers\AuthorController;
use App\Models\Books;
use App\Http\Controllers\BooksController;
use App\Models\cabang;
use App\Http\Controllers\CabangController;

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

Route::get('/home', function(){
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/author/all', [AuthorController::class, 'index']);
Route::get('/author/detail/{author}', [AuthorController::class, 'show']);
Route::get('/book/all', [BooksController::class, 'index']);
Route::get('/book/detail/{book}', [BooksController::class, 'show']);
Route::get('/cabang/all', [CabangController::class, 'index']);
Route::get('/cabang/detail/{cabang}', [CabangController::class, 'show']);