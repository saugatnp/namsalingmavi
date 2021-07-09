<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
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
Route::get('/', 'PostController@index');

// Route::get('/home', 'PagesController@home');


Route::get('/library' , 'PagesController@library');
Route::get('/contactus' , 'PagesController@contactus');
Route::get('/login' , 'PagesController@login');
Route::get('/aboutus' , 'PagesController@aboutus');
Route::get('/gallery' , 'PagesController@gallery');
Route::get('/gallery/images/{id?}' , 'PagesController@images');
Route::get('/notice', 'PagesController@notice');
Route::get('/notice/viewdetails/{id?}', 'PagesController@noticedetail');
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
Route::post('addalbum', ['uses' => 'HomeController@addalbum']);
///back end routes

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);
Auth::routes();
Route::get('/dash-board/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->middleware('auth');
Route::get('/dash-board/booklist', [App\Http\Controllers\HomeController::class, 'booklist'])->middleware('auth');
Route::get('/dash-board/examroutine', [App\Http\Controllers\HomeController::class, 'examroutine'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');


Route::post('/index/{id}', [PostController::class, 'store'])->middleware('auth');

