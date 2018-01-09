<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::group(['middleware' => 'auth:api'], function () {
  Route::get('/users','ShowUsers');
  Route::get('/users/{id}','ShowUsersbyId');
  Route::post('/users','StoreUser');
  Route::delete('/users/{id}','DeleteUser');
  Route::put('/users/{id}','UpdateUser');

  Route::get('/albums','ShowAlbums');
  Route::get('/albums/{id}','ShowAlbumbyId');
  Route::post('/albums','StoreAlbum');
  Route::put('/albums/{id}','UpdateAlbum');
  Route::delete('/albums/{id}','DeleteAlbum');
// });
