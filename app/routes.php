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
Route::model('book', 'Book');

Route::get('/', function() {
  return Redirect::to("books");
});

Route::get('books', function(){
  $books = Book::all();
  return View::make('books/index')
    ->with('books', $books);
});