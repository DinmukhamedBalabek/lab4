<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Posts;
use App\Http\Controllers\ClientController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/home', function () {
    return "home";
})->name('home');

Route::get('posts/add',Function(){
    DB::table('posts')->insert([
        'title' => 'My title',
        'body' => 'My body'
    ]);
});

Route::get('post', [ClientController::class, 'index']);

Route::get('post/create',function(){
    return view('post.create');
});

Route::post('post/create', [ClientController::class, 'store'])->name('add-posts');

Route::get('post/{id}',[ClientController::class, 'get_post']);