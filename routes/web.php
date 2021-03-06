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

Route::resource('Issues','App\Http\Controllers\IssuesController')->only([
    'index', 'store'
]);

Route::resource('Issues.comment','App\Http\Controllers\IssuesCommentController')->only([
     'show'
]);

Route::resource('Issues.image','App\Http\Controllers\IssuesImageController')->only([
    'show'
]);

Route::resource('Issues.comment','App\Http\Controllers\CommentsImageController')->only([
    'show'
]);
