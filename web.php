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

Auth::routes();
//
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', 'HomeController@index')->name('LoggedIn');
Route::get('/', 'FirstPageController@index');
Route::get('/partners', 'PartnersController@index');
Route::resource('projectposts','ProjectPostController');
Route::resource('userprofile','UserProfilecontroller');


// Route::get('/users/{id}/{name}', function($id,$name)
// {
//   return 'This is user ' .$name. ' with id of ' .$id;
// });
