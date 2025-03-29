<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/users/{param}', function ($param) {
	return $param;
});

//Parâmetros-fazer pesquisa, é tipo json - PESQUISAR
Route::get('/users/{param}/{paramii}', function ($param, $paramii) {
	return $param. '-' . $paramii;
});

//Formas elegantes de trabalhar com routes/rotas
//Trabalhar com prefixos
Route::prefix('usuarios')->group(function(){
	Route::get('/edit', function() {
		return 'edit';
	});
	Route::get('/delete', function() {
		return 'delete';
	});
});

//Mocar e copular dados
Route::get('/dados-de-usuarios/{user}', function(\App\Models\User $user){
		return $user;
});