<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

//route URL /halo ke controller SiteController di function halo
Route::get('/halo', 'SiteController@halo');

//route URL /newbook ke View newbook
Route::get('/newbook', function() 
{
	return View::make('newbook');
});

//route URL /book/insert ke controller BookController di fungsi store
Route::post('book/insert', 'BookController@store');

//route URL booklist ke view booklist
Route::get('booklist', function() {
	$books = Book::all(); //mengambil semua data buku dari tabel book 
	return View::make('listbook')->with('booksdata', $books);
});

//route ke URL book/edit/id menuju ke controller edit
Route::get('/book/edit/{id}', 'BookController@edit');

//route ke URL book/update menuju controller update
Route::post('book/update', 'BookController@update');

Route::get('book/delete/{id}', 'BookController@delete');

Route::get('book/detail/{id}', 'BookController@detail');