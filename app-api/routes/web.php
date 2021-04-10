<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;
use App\Http\Resources\BookResource;

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

Route::get('/json',function(){
    $book = Book::find(1);
    return new BookResource($book);
});

Route::get('books/{book}', [BookController::class, 'show']);