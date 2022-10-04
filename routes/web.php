<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

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
    return view('front.index');
});

 
Route::get('/feed',[FeedController::class,'index'])->name("feed");
Route::post('/feed',[FeedController::class,'like'])->name('like');
Route::get('/get_feed',[FeedController::class,'get_feed'])->name("feed.get");
Route::post('/feed', [FeedController::class, 'add_reply'])->name("add_reply");
Route::post('/add_post',[FeedController::class,'add_post'])->name("feed.add");

Route::post('/comments',[CommentController::class, 'entercomment']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

