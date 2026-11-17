<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\BookController::class, 'getAllBooks'])->name('books.getAllBooks');
Route::get('/booksform', [App\Http\Controllers\BookController::class, 'create'])->name('books.create');
Route::post('/booksform', [App\Http\Controllers\BookController::class, 'store'])->name('books.store');
Route::get('/editbook/{book}', [App\Http\Controllers\BookController::class, 'edit'])->name('books.edit');
Route::put('/editbook/{book}', [App\Http\Controllers\BookController::class, 'update'])->name('books.update');
Route::delete('/destroybook/{book}', [App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');
