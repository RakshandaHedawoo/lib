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

Route::get('books',['uses'=>'LibraryController@index','as'=>'books.index']);
Route::get('books/list',['uses'=>'LibraryController@list','as'=>'books.list']);
Route::get('books/create',['uses'=>'LibraryController@create','as'=>'books.create']);
Route::post('books/store',['uses'=>'LibraryController@store','as'=>'books.store']);
Route::get('books/{id}/edit',['uses'=>'LibraryController@edit','as'=>'books.edit']);
Route::put('books/{id}/update',['uses'=>'LibraryController@update','as'=>'books.update']);
