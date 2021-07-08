<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
;

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
Route::get('/home', function () {
    return view('welcome');
    //return 'hello';
});
*/
//home page route
Route::get('/', 'PagesController@home');

// Route::get('/home', 'PagesController@home');


Route::get('/library' , 'PagesController@library');
Route::get('/contactus' , 'PagesController@contactus');
Route::get('/login' , 'PagesController@login');
Route::get('/aboutus' , 'PagesController@aboutus');
Route::get('/gallery' , 'PagesController@gallery');
Route::get('/gallery/images/{id?}' , 'PagesController@images');
Route::get('/notice', 'PagesController@notice');
Route::get('/academics' , 'PagesController@academics');
Route::get('/aboutus/schoolprofile','PagesController@schoolprofile');
Route::get('/aboutus/bot','PagesController@bot');
Route::get('/aboutus/smsc','PagesController@smsc');
Route::get('/aboutus/cont','PagesController@cont');
Route::get('/academics/academicslevel' , 'PagesController@academicslevel');
Route::get('/academics/booklist/{id?}' , 'PagesController@booklist');
Route::get('/academics/examresult' , 'PagesController@examresult');
Route::get('/academics/examroutine' , 'PagesController@examroutine');
Route::resource('/index' , 'PostController');

///back end routes


Auth::routes();
Route::get('/dash-board/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->middleware('auth');
Route::get('/dash-board/booklist', [App\Http\Controllers\HomeController::class, 'booklist'])->middleware('auth');
Route::get('/dash-board/examroutine', [App\Http\Controllers\HomeController::class, 'examroutine'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
