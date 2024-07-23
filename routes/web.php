<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;


Route::view('/', 'home')->name('home');
Route::view('contacto', 'contacto')->name('contacto');
Route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas');
Route::get('personas/crear', 'App\Http\Controllers\PersonasController@create')->name('personas.create');
Route::get('personas/{nPerCodigo}/editar', 'App\Http\Controllers\PersonasController@edit')->name('personas.edit');
Route::patch('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@update')->name('personas.update');
Route::post('personas', 'App\Http\Controllers\PersonasController@store')->name('personas.store');
Route::get('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');
Route::delete('personas/{nPerCodigo}', 'App\Http\Controllers\PersonasController@destroy')->name('personas.destroy');
