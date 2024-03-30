<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/todo')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('todo.index');
    Route::post('/store', [TodoController::class, 'store'])->name('todo.store');
    Route::get('/{task_id}', [TodoController::class, 'delete'])->name('todo.delete');
    Route::get('/{task_id}/edit', [TodoController::class, 'edit'])->name('todo.edit');
    Route::put('/{task_id}/update', [TodoController::class, 'update'])->name('todo.update');
});
