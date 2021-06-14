<?php
use Illuminate\Support\Facades\Auth;
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

Route:: resource("/","Users\LandingPagesController");


Auth::routes(['register' => false]);

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('hapus-profile/{id}', 'Admin\ProfilesController@delete_profile');
Route::resource('profile','Admin\ProfilesController');
Route::resource('account','Admin\AccountsController');
Route::resource('lingkupbisnis','Admin\BusinessScopesController');
Route::resource('contact','Admin\ContactsController');