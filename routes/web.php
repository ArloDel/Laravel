<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/', function () {
    return view(
        'home',
        ['title' => 'Home',]
    );
});

Route::get('/about', function () {

    return view(
        'About',
        [
            'title' => 'About',
            'name' => 'Samantha'
        ]
    );
});


Route::get('/posts', [PostController::class, 'index']);


Route::get('/posts/{slug}', [PostController::class, 'show']);

Route::get('/weather', function () {

    return view(
        'Weather',
        [
            'title' => 'about'
        ]
    );
});
