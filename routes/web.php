<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('index');
Route::get("valentines-card", function() {
    return view('card.index');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('admin', 'PortfolioController@admin')->name('admin');
    Route::get('admin/new-post', 'PortfolioController@create')->name('new-post');
    Route::post('admin/new-post', 'PortfolioController@store')->name('new-post.add');
    Route::get('admin/added-post', 'PortfolioController@index')->name('added-post');
    Route::get('admin/added-post/{id}/show', 'PortfolioController@show')->name('added-post.show');
    Route::get('admin/added-post/{id}', 'PortfolioController@edit')->name('added-post.edit');
    Route::post('admin/added-post/{id}', 'PortfolioController@update')->name('added-post.update');
    Route::get('admin/added-post/{id}/delete', 'PortfolioController@delete')->name('added-post.delete');
    Route::get('admin/added-post/{id}/status', 'PortfolioController@status')->name('added-post.status');
    Route::get('admin/profile', 'PortfolioController@profile')->name('profile');
});

Auth::routes([

    'register' => false, // Register Routes...
  
    'reset' => false, // Reset Password Routes...
  
    'verify' => false, // Email Verification Routes...
  
  ]);
