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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// frontend route start

Route::get('/profile-update', 'frontend\ProfileController@profile_update')->name('profile_update');
Route::post('/profile-update', 'frontend\ProfileController@profile_post_update')->name('profile.post.update');
Route::get('/edit-history', 'frontend\ProfileController@editLifestyle')->name('edit_lifestyle');
Route::post('/edit-history', 'frontend\ProfileController@aboutCreate')->name('about.create');
Route::get('/view-profile/{id}', 'frontend\ProfileController@viewProfile')->name('view.profile');

