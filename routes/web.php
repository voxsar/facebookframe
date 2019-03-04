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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/signup', "AccountController@register");

Route::get('/signin', "AccountController@login");

Route::get('/forgot', "AccountController@forgot");

Route::post("/checklogin", "AccountController@validatelogin");	

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/role', function () {
    return view('roles');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/courttypes', "CourtController@courttypes");
Route::post('/courttypes/create', "CourtController@store");
Route::get('/courts', "CourtController@courts");
Route::post('/courts/create', "CourtController@storecourt");

Route::get('/casetypes', 'CaseController@casetypes');
Route::post('/casetypes/create', 'CaseController@store');
Route::get('/cases', 'CaseController@index');
Route::post('/cases/create', 'CaseController@casestore');
Route::get('/caseupdates', 'CaseController@caseupdates');
Route::get('/caseupdate/{id}', 'CaseController@caseupdate');
Route::get('/caseupdate/{id}/create', 'CaseController@caseupdatecreate');

Route::get('/accounts/lawyers', "AccountController@all_lawyeraccounts");
Route::get('/accounts/pending/lawyers', "AccountController@accounts");
Route::get('/accounts/customers', "AccountController@all_customeraccounts");
Route::get('/accounts/pending/customers', "AccountController@accounts");