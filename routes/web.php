<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');
Route::get('/library' , 'PagesController@library');
Route::get('/contactus' , 'PagesController@contactus');
Route::get('/aboutus' , 'PagesController@aboutus');
Route::get('/gallery' , 'PagesController@gallery');
Route::get('/academics' , 'PagesController@academics');


