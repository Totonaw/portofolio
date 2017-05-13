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
//research again for grouping route
//cms route use group auth
//Route::group(['middleware'=>'auth'],function(){
	Route::get('cms', array('uses'=>'Cms\LoginController@login'));
	
	Route::post('cms/login','Cms\LoginController@auth');
	
	Route::get('cms/menu/','Cms\MenuController@listMenu');
	Route::get('cms/menu/create','Cms\MenuController@createMenu');	
//});
