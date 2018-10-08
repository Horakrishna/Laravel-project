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
/*
Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/', function() {
	//return 'Hello Public page';

	return view('home');
});

Route::get('pallab', function(){
	return 'Hello Pallab';
});

/*Controller class Some company use this structure 
Route::get('/','StudentController@index');

*/
Route::get('/', [
	'uses' =>'StudentController@index',
	'as'   =>'/'
]);

Route::get('/about',[
	'uses' =>'StudentController@add',
	'as'   =>'/about'
]);