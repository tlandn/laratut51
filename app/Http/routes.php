<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', ['middleware' => 'auth', function() {
        return 'this page only show for signed in user';
}] );
Route::get('/contact', "PagesController@contact");

Route::resource('articles', 'ArticlesController');

Route::controllers(
    [
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController'
    ]
);

Route::get('foo', ['middleware' => 'manager', function() {
    return 'this page only viewed by manager';
}]);

Route::resource('admin/person', 'PersonController');

Route::resource('posts', 'PostsController');