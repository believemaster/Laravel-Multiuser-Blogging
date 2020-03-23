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

// use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomePageController@index');
Route::get('/listing', 'ListingPageController@index');
Route::get('/details', 'DetailsPageController@index');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', 'Admin\DashboardController@index');
    Route::get('/category', 'Admin\CategoryController@index');
    Route::get('/category/create', 'Admin\CategoryController@create');
    Route::get('/category/edit', 'Admin\CategoryController@edit');
    
    Route::get('/permission', ['uses'=>'Admin\PermissionController@index', 'as'=>'permission-list', 
                               'middleware'=>'permission:Permission List|All']);
    Route::get('/permission/create', ['uses'=>'Admin\PermissionController@create', 'as'=>'permission-create', 
                                      'middleware'=>'permission:Permission List|All']);
    Route::post('/permission/store', ['uses'=>'Admin\PermissionController@store', 'as'=>'permission-store', 
                                      'middleware'=>'permission:Permission List|All']);
    Route::get('/permission/edit/{id}', ['uses'=>'Admin\PermissionController@edit', 'as'=>'permission-edit', 
                                         'middleware'=>'permission:Permission List|All']);
    Route::put('/permission/update/{id}', ['uses'=>'Admin\PermissionController@update', 'as'=>'permission-update', 
                                           'middleware'=>'permission:Permission List|All']);
    Route::delete('/permission/delete/{id}', ['uses'=>'Admin\PermissionController@delete', 'as'=>'permission-delete', 
                                              'middleware'=>'permission:Permission List|All']);
    
    Route::get('/roles', 'Admin\RoleController@index');
    Route::get('/roles/create', 'Admin\RoleController@create');
    Route::post('/roles/store', 'Admin\RoleController@store');
    Route::get('/roles/edit/{id}', ['uses'=>'Admin\RoleController@edit', 'as'=>'role-edit']);
    Route::put('/roles/update/{id}', ['uses'=>'Admin\RoleController@update', 'as'=>'role-update']);
    Route::delete('/roles/delete/{id}', ['uses'=>'Admin\RoleController@destroy', 'as'=>'role-delete']);

    Route::get('/author', 'Admin\AuthorController@index');
    Route::get('/author/create', 'Admin\AuthorController@create');
    Route::post('/author/store', 'Admin\AuthorController@store');
    Route::get('/author/edit/{id}', ['uses'=>'Admin\AuthorController@edit', 'as'=>'author-edit']);
    Route::put('/author/update/{id}', ['uses'=>'Admin\AuthorController@update', 'as'=>'author-update']);
    Route::delete('/author/delete/{id}', ['uses'=>'Admin\AuthorController@destroy', 'as'=>'author-delete']);
});

Auth::routes();




// Route Practice:
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/user/{id}/{name?}', function ($id, $name = "Believe Master") { // if no name is define in url it shows default name
    return 'Your Id ' . $id . " and Name is " . $name;
})->where('id', '[0-9]+');  // Regex for to use only integer in url no text
Route::get('/world', 'HelloController@hello');
// adding prefix to the routes
// Route::group(['prefix' => 'back', ' middleware' => 'auth'], function () {
//     Route::get('/', 'Admin\DashboardController@index');
// });

// DB Connectivity and Model
Route::get('/query', 'DbController@index');
Route::get('/joining', 'DbController@joining');
Route::get('/model', 'DbController@model');


Route::get('/home', 'HomeController@index')->name('home');
