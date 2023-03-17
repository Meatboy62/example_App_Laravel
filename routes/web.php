<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {

//     return view('welcome');
// })->name('home.welcome');

// Route::get('/contact', function () {
//     return view('contact.index');
// })->name('home.contact');


Route::get('/', [HomeController::class, 'home'])
->name('home.welcome');

Route::get('/contact', [HomeController::class, 'contact'])
->name('home.contact');





Route::resource('posts',PostController::class);

// Route::get('/posts', function () use ($posts) {
//     //dd(request()->all());
//     return view('posts.index', ['posts' => $posts]);
// });




// Route::get('/posts/{$id}', function ($id) use ($posts) {
//     abort_if(!isset($posts[$id]), 404);
//     return view('posts.show', ['post' => $posts[$id]]);
// });


// Route::get('/fun/responses', function() use($posts) {
//     return response($posts, 201)
//         ->header('Content-Type', 'application/json')
//         ->cookie('MY_COOKIE', 'Piotr Jura', 3600);
// });

// Route::get('/fun/json', function () use ($posts) {
//     return response()->json($posts);
// });


// Route::get('/fun/download', function() use($posts){
//  return response() ->download(public_path('/Meatboy.png'),'Metaboy.png');
// });




// Route::get('/recent-posts/{days_ago?}', function ($daysAgo = 20) {
//     return 'Past from ' . $daysAgo . ' days ago';
// })->name('post.recent.index')->middleware('auth');


