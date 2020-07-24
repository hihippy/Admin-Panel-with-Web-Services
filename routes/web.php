<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //return view('user/blog');
    return "Welcome to HiHippy";
});

Route::get('/post', function () {
    return view('user/post');
})->name('post');

// Admin Routes

Route::group(['namespace' => 'admin'], function () {
    Route::get('admin/home', 'DashboardController@index')->name('admin.name');
    Route::resource('admin/user','users\UserController');

});

