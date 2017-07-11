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
    return view('pages.index');
});
Route::get('/login', 'UserController@login');
Route::get('/register', 'UserController@register');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');


// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('tag', 'Admin\TagCrudController');
  
  // [...] other routes
});

Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);

 