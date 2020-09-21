<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/' , 'SiteController@index')->name('site.index');
Route::get('/about' , 'SiteController@about')->name('site.about');
Route::get('/blog' , 'SiteController@blog')->name('site.blog');
Route::get('/codding_news' , 'SiteController@codding_news')->name('site.blog.two');
Route::get('/contact_me' , 'SiteController@contact')->name('site.contact');
Route::get('/{slug}' , 'SiteController@show')->name('site.show');


Route::get('/single' , 'SiteController@single')->name('site.single');

