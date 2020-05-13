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
Route::get('/',function(){
	return view("test");
});

// end test

Route::get('register','Auth\RegisterController@showRegisterForm');
Route::get('login','Auth\LoginController@showLoginForm');

Route::match(['get','post'],'home','JobController@getSearch')->name('searchJob');
Route::group(['prefix' => 'home'], function(){
	Route::get( 'find-job', 'JobController@fetchJsonFindJob');
	Route::get( 'find-candidate', 'CandidateController@fetchJsonFindCandidate');
	Route::get( 'post-job', 'JobController@fetchJsonPostJob');
	Route::get( 'post-profile', 'CandidateController@fetchJsonPostProfile');
});




Route::get('home/fetch_data','JobController@fetch_data');

Route::match(['get','post'],'/pagination1','CandidateController@getSearch');
Route::get('pagination1/fetch_data','CandidateController@fetch_data');



