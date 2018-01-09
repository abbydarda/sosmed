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
Route::group(['middleware' => 'auth:api'], function () {
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

  Route::get('/photos','ShowPhotos');
  Route::get('/photos/{id}','ShowPhotosbyId');
  Route::post('/photos','StorePhotos');
  Route::put('/photos/{id}','UpdatePhotos');
  Route::delete('/photos/{id}','DeletePhotos');

  Route::get('/posts','ShowPosts');
  Route::get('/posts/{id}','ShowPostsbyId');
  Route::get('/posts/{postId}/comments','ShowPostsCommentsbypostId');
  Route::post('/posts','StorePosts');
  Route::put('/posts/{id}','UpdatePosts');
  Route::delete('/posts/{id}','DeletePosts');

  Route::get('/comments','ShowComments');
  Route::get('/comments/{id}','ShowCommentsbyId');
  Route::post('/comments','StoreComments');
  Route::put('/comments/{id}','UpdateComments');
  Route::delete('/comments/{id}','DeleteComments');

  Route::get('/todos','ShowTodos');
  Route::get('/todos/{id}','ShowTodosbyId');
  Route::post('/todos','StoreTodos');
  Route::put('/todos/{id}','UpdateTodos');
  Route::delete('/todos/{id}','DeleteTodos');
});
