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


Route::get('/about', function () {
    return view('about');
});


Route::get('/post', 'articlesController@display');
Route::put('/post/{id}', 'articlesController@update');
Route::get('/post/more/{id}', 'articlesController@show');
Route::get('/post/{id}/edit', 'articlesController@edit');
Route::get('/post/my/{id}', 'articlesController@myarticle');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', 'articlesController@index');
Route::get('/create/add','articlesController@create');
Route::post('/create','articlesController@store');
Route::get('/delete/{id}','articlesController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//for Comments

Route::post('/addcomment/{id}','commentsController@store');
