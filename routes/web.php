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

//FrontendController
Route::get('/','FrontendController@View');
//RegistrationController
Route::get('/signUp','RegistrationController@create');
Route::post('/signUp','RegistrationController@store');

//LoginController
Route::get('/loginUser','LoginController@create');
Route::post('/loginUser','LoginController@login');
Route::get('/logout','LoginController@logout');

//Category Controller
Route::resource('categories','Admin\CategoryController');
Route::resource('posts','Admin\PostController');
//Blog Controller
 Route::get('/travel','Frontend\BlogController@index');
 Route::get('/blogDetails/{id}','Frontend\BlogController@details');
 //Comment Controller
 Route::post('/comment','Frontend\CommentController@store');
 //About backend Controller
 Route::resource('abouts','Admin\AboutController');
 //About frontend Controller
 Route::get('/about', 'Frontend\AboutDetailsController@index');
  //Contact Controller
 // Route::get('/contacts','Admin\ContactController@index');
 // Route::get('/contacts/delete/{id}','Admin\ContactController@destroy');
 Route::resource('contacts','Admin\ContactController');
 // Route::get('/contacts','Frontend\ContactController@index');
 Route::get('/contacts/create','Frontend\ContactController@create');
 Route::post('/contacts','Frontend\ContactController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
