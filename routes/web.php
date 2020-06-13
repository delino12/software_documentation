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

Route::get('/', 						'ExternalPageController@index');
// Route::get('/login', 					'ExternalPageController@loginScreen')->name('login');
// Route::post('/login', 					'ExternalPageController@processLogin')->name('process_login');
Route::get('/project/documentation/1', 	'ExternalPageController@project');

Auth::routes();
Route::get('document/index',			'CreateDocumentController@index')->name('home');
Route::get('/home',						'CreateDocumentController@index');
Route::get('document/create',			'CreateDocumentController@create');
Route::post('document/save',			'CreateDocumentController@saveDocument');
Route::get('document/read',				'CreateDocumentController@readDocument');
Route::get('document/read/one/{id}',	'CreateDocumentController@readOneDocument');
Route::get('document/delete',			'CreateDocumentController@deleteDocument');

