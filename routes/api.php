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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::group(['middleware' => 'auth:api'], function () {
  Route::get('/users','ShowUsers');
  Route::get('/users/{id}','ShowUsersbyId');
  Route::post('/users','StoreUser');
  Route::delete('/users/{id}','DeleteUser');
  Route::put('/users/{id}','UpdateUser');
  // Route::get('/',function(){
  //     $data = App\User::find(1);
  //     return $data;
  // });
  // Route::post('/register', function(Request $request){
  //     return App\User::create($request->all());
  // });
// });
