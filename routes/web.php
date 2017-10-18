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
 


Route::group(['prefix' => 'admin'], function () {
Voyager::routes();
});
Route::group(['prefix' => 'admin'], function () {
Voyager::routes();
});

Auth::routes();
Route::get("/" , 'PostController@PostAll');
Route::get("/galeri" , 'PostController@GalleryAll');
Route::get('Post/{slug}' , 'PostController@DetailofPost');
Route::get('post2' , 'PostController@LatestPost');
Route::post("/", 'CommentController@PostComment');
Route::get("/MakeComment" , 'CommentController@MakeComment');
Route::get("/comment_all{id}" , 'CommentController@comment_all');
Route::get("/news" , 'PostController@findnews');

//Route::get('/galeri' , 'GalleryController@findgaleri');
//Route::get('/galeri' , 'GalleryController@findpage');
// Route::get("/yorum-olustur" , 'commentController@yorumOlustur'); */
//Route::get("welcome" , 'PostController@PostAll');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get("/" , 'GalleryController@GalleryAll');
//bir sayfaya sadece bir yönlendirme yapılabilir.('Welcome')mesela
//burası url           //controller adı , // fonksiyonun adı.
//Route::get('Post/{slug}' , 'AuthorController@DetailofUser');
//Route::get('post/{id}', 'HomeController@PostIndex');
//Route::get('/post2' , 'PostController@LatestPost');

