<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;

// Route::get('/note/{id?}',[NoteController::class, 'index'])->name('note.index');
// Route::get('/note/hello',[NoteController::class, 'example'])->name('note.example');
Route::get('/note',[NoteController::class,'index'])->name('note.index');
Route::get('/note/create',[NoteController::class,'create'])->name('note.create');
Route::post('/note/store',[NoteController::class,'store'])->name('note.store');
Route::get('/note/edit/{note}',[NoteController::class,'edit'])->name('note.edit');
Route::put('/note/update/{note}',[NoteController::class,'update'])->name('note.update');
Route::get('/note/show/{note}',[NoteController::class,'show'])->name('note.show');
Route::delete('/note/destroy/{note}',[NoteController::class,'destroy'])->name('note.destroy');

//conjunto de rutas para hacer un CRUD
//probamos en consola con php artisan route:list
Route::resource('/post',PostController::class);