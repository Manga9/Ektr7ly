<?php

Route::group(['namespace' => 'user'], function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/movie/{id}', 'homeController@showMovie')->name('movie');

});

Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::group(['namespace' => 'admin'], function () {

    Route::get('/admin/dashboard', 'dashboardController@index')->name('dashboard');
    Route::resource('/admin/members', 'membersController');
    Route::resource('/admin/categories', 'categoriesController');
    Route::resource('/admin/movies', 'moviesController');
    Route::resource('/admin/admins', 'adminsController');
});

Route::get('/admin/login', 'Auth\adminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\adminLoginController@login')->name('admin.submit');
Route::get('/admin/logout', 'Auth\adminLoginController@logout')->name('admin.logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

