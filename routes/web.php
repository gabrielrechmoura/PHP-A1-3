<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::view('/', 'layouts.app');

Route::view('/', 'child-1');
Route::view('/two', 'child-2');

Route::resource('alunos', AlunoController::class);

Route::resource('cursos', CursoController::class);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
