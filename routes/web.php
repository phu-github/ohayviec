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


// Khu vực test
Route::get('/test',function(){
	return  view('shared._template');
});
// end test


// Khu vuecj làm việc'

Route::get('/',function(){
	return  redirect('/home');
});
Route::match(['get','post'],'account/login','Auth\AdminController@checkLoginForm');
Route::match(['get','post'],'account/register','Auth\AdminController@CheckRegisterForm')->name('linkRegister');

Route::match(['get','post'],'home','JobController@getSearch')->name('searchJob');
Route::group(['prefix' => 'home'], function(){
	Route::get( 'amount-job', 'JobController@getAmountJob');
	Route::get( 'amount-candidate', 'CandidateController@getAmountCandidate');
	Route::post( 'post-job', 'JobController@postJob'); // sd ajax
	Route::post( 'post-profile', 'CandidateController@postProfile');  // sd ajax
	Route::post( 'search-job', 'JobController@searchJob'); // sd ajax
	Route::post( 'search-candidate', 'CandidateController@searchCandidate'); // sd ajax
});

Route::group(['prefix' => 'admin'], function(){
	Route::get('','Admin\HomeController@view');
	Route::get( 'quan-ly-tin', 'Admin\JobController@view');
	Route::get( 'quan-ly-ho-so', 'Admin\CandidateController@view');
	Route::get( 'quan-ly-tai-khoan', 'Admin\UserController@view'); 
	Route::get( 'quan-ly-blog', 'Admin\Blogcontroller@view');  
});