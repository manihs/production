<?php

use Illuminate\{
    Http\Request,
};
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

// Route::post('/data', function (Request $request) {
//     dd($request->all());
// });

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/video', function () {
    return view('videos');
});



Route::get('/create/community', function () {
    return view('posts.community');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// 
Route::get('/upload/image', 'PostController@new_image_post_form')->name('post.img');

Route::post('/upload/image', 'PostController@new_image_post')->name('post.img.post');

Route::post('/post/like', 'PostController@post_like')->name('post.like');

Route::post('/post/dislike', 'PostController@post_dislike')->name('post.dislike');
