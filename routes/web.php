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
Route::get('/admin','Admin\UserController@view');

// end test


// Khu vuecj làm việc
Route::match(['get','post'],'account/login','Auth\AdminController@checkLoginForm');
Route::match(['get','post'],'account/register','Auth\AdminController@CheckRegisterForm')->name('linkRegister');

Route::match(['get','post'],'home','JobController@getSearch')->name('searchJob');
Route::group(['prefix' => 'home'], function(){
	Route::get( 'amount-candidate', 'CandidateController@getAmountCandidate');
	Route::get( 'find-job', 'JobController@fetchJsonFindJob');
	Route::get( 'find-candidate', 'CandidateController@fetchJsonFindCandidate');
	Route::get( 'post-job', 'JobController@fetchJsonPostJob');
	Route::get( 'post-profile', 'CandidateController@fetchJsonPostProfile');

});

// end khu vuc lam viec


Route::group(['middleware' => ['auth.user']], function () {
    
});


Route::group(['middleware' => ['auth.admin']], function () {
    
});