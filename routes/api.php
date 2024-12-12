<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('usuarios','App\Http\Controllers\usuarioController@getUsuario');
Route::get('usuarios/{id}','App\Http\Controllers\usuarioController@getUsuarioId');
Route::post('usuarios','App\Http\Controllers\usuarioController@insertUsuario');
Route::put('usuarios/{id}','App\Http\Controllers\usuarioController@updateUsuario');
Route::delete('usuarios/{id}','App\Http\Controllers\usuarioController@deleteUsuario');

Route::get('peliculas','App\Http\Controllers\peliculaController@getPelicula');
Route::get('buscar','App\Http\Controllers\peliculaController@buscarPorNombre');
Route::get('pagina','App\Http\Controllers\peliculaController@peliculasPaginadas');
Route::get('peliculas/{id}','App\Http\Controllers\peliculaController@getPeliculaId');
Route::post('peliculas','App\Http\Controllers\peliculaController@insertPelicula');
Route::put('peliculas/{id}','App\Http\Controllers\peliculaController@updatePelicula');
Route::delete('peliculas/{id}','App\Http\Controllers\peliculaController@deletePelicula');
