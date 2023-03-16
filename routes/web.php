<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home.welcome');

Route::get('/contact', function () {
    return view('contact.index');
})->name('home.contact');

Route::get('/post/{id}', function ($id) {
    return 'Blog post ' . $id;
}) ->name('post.show');


Route::get('/recent-posts/{days_ago?}', function ($daysAgo = 20) {
    return 'Past from ' . $daysAgo . ' days ago';
})->name('post.show');