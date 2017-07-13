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
    return view('index');
});

//Route::get('user_profiles','dataController@showAll');

//Route::get('user_profiles/{id}','dataController@show');
/*Route::get('user_profiles', function() {
  return view('user_profiles');
});*/

//Route::get('insert_data','insertController@insertForm');
//Route::post('create','insertController@insert');

Route::get('/csv','csvController@index');
Route::post('/csv/upload','csvController@upload');
Route::get('/csv/display','csvController@displayTable');

Route::get('/user_profiles/order','dataController@order');
Route::get('/user_profiles/search','dataController@search');
Route::get('/user_profiles/agesort','dataController@agesort');

Route::resource('user_profiles','dataController');
