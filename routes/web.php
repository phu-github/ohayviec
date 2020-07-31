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
	Route::get( 'quan-ly-tin', 'Admin\JobController@view')->name('quan-ly-tin'); ;
	Route::get( 'quan-ly-ho-so', 'Admin\CandidateController@view')->name('quan-ly-ho-so');
	Route::get( 'quan-ly-tai-khoan', 'Admin\UserController@view')->name('quan-ly-tai-khoan'); 
	Route::get( 'quan-ly-blog', 'Admin\Blogcontroller@view')->name('quan-ly-blog');

	Route::match(['get','post'], 'edit-job', 'Admin\JobController@editJob');
	Route::match(['get','post'], 'update-job', 'Admin\JobController@updateJob');
	Route::match(['get','post'], 'delete-job', 'Admin\JobController@deleteJob');
	Route::post('addJob',['as' =>'addJob', 'uses'=>'Admin\JobController@addJob']);

	Route::match(['get','post'],'view-can-detail','Admin\CandidateController@viewCan');
	Route::match(['get','post'], 'edit-can', 'Admin\CandidateController@editCan');
	Route::match(['get','post'], 'delete-can', 'Admin\CandidateController@deleteCan');
	Route::post('addCan',['as' =>'addCan', 'uses'=>'Admin\CandidateController@addCan']);

	Route::post('view-user-detail','Admin\UserController@viewUser');
	Route::post( 'edit-user', 'Admin\UserController@editUser');
	Route::post( 'update-user', 'Admin\UserController@updateUser');
	Route::post( 'delete-user', 'Admin\UserController@deleteUser');
	Route::post('addUser',['as' =>'addUser', 'uses'=>'Admin\UserController@addUser']);
});