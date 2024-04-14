<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/articles', [ArticleController::class, 'store'])->name('store.article');
Route::get('/articles', [ArticleController::class, 'index'])->name('index.article');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('show.article');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('update.article');
Route::delete('/articles/{article}', [ArticleController::class, 'delete'])->name('delete.article');