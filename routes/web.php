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
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Sulis Rosliani",
        "email" => "sulisrosliani2@gmail.com",
        "image" => "profil.jpg"

    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{slug}', [PostController::class, 'show']);