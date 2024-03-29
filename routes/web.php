<?php

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

Route::get('/paises', 'SuperHeroController@GetAll');

Route::get('/pais/{id}', 'SuperHeroController@Get');

Route::get('/ranking', 'SuperHeroController@Ranking');
