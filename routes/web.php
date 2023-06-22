
<?php

use Illuminate\Support\Facades\Route;


Route::get('/play', function () {
    return view('fontend.play');
});

Route::get('/login', function () {
    return view('fontend.login');
});
//Home
Route::get('/', 'App\Http\Controllers\HomeController@showHome');
Route::get('home', 'App\Http\Controllers\HomeController@showHome');

// Đăng ký
Route::get('register', 'App\Http\Controllers\UserController@showRegisterForm');
Route::post('register', 'App\Http\Controllers\UserController@storeUser');

// Login
Route::get('admincp/login', ['as' => 'getLogin', 'uses' => 'App\Http\Controllers\AdminLoginController@getLogin']);
Route::post('admincp/login', ['as' => 'postLogin', 'uses' => 'App\Http\Controllers\AdminLoginController@postLogin']);
Route::get('admincp/logout', ['as' => 'getLogout', 'uses' => 'App\Http\Controllers\AdminLoginController@getLogout']);

Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function() {
	Route::get('/', function() {
		return view('admin.home');
	});
});
//movies
Route::get('/phimle', function () {
    return view('movies.phimle');
});
Route::get('/phimbo', function () {
    return view('movies.phimbo');
});
Route::get('/phimmoi', function () {
    return view('movies.phimmoi');
});
Route::get('/phimchieurap', function () {
    return view('movies.phimchieurap');
});
