<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('api\v1')->group(function (){
    Route::get('/posts', 'PostController@getPosts');
    Route::post('/posts', 'PostController@addPost');
    Route::put('/posts', 'PostController@updatePost');
    Route::delete('/posts', 'PostController@deletePost');

    Route::get('/categories', 'HeaderController@getCategories');
    Route::post('/categories', 'HeaderController@addCategory');
    Route::put('/categories', 'HeaderController@updateCategory');
    Route::delete('/categories', 'HeaderController@deleteCategory');

    Route::get('/import-moba', 'ProductController@import');
});


