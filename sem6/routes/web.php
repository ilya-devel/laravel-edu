<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $books = Book::all();
    return view('library', ['books'=> $books]);
})->name('homePage');


Route::get('/addBook', [BookController::class, 'getForm'])->name('showForm');
Route::post('/addBook', [BookController::class, 'addBook'])->name('addBook');
Route::get('/book/{id}/remove', [BookController::class, 'removeBook'])->name('removeBook');

