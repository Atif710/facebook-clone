<?php

use App\Http\Controllers\MstgroupController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FeedController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\MstpostController;
use App\Http\Controllers\MainController;
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
Route::post('/add_like/{postid}/{like}',[FeedController::class,'add_like'])->name('feed.like');
Route::get('/get_feed',[FeedController::class,'get_feed'])->name("feed.get");
Route::post('/feed', [FeedController::class, 'add_reply'])->name("add_reply");
Route::post('/add_post',[FeedController::class,'add_post'])->name("feed.add");

Route::post('/comments',[CommentController::class, 'entercomment']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



//MstController routes===============

// Route::get('/feed',[MstpostController::class,'feed']);

Route::post('/post',[MstpostController::class,'store']);

//MstGroup Routes=======================================

Route::post('/postgroup',[MstgroupController::class,'store']);

//MainController Route==========================

Route::get('viewfriends',[MainController::class,'viewfriends']);
Route::get('viewgroups',[MainController::class,'viewgroups']);

// Route::get('/add_like',[LikeController::class,'add_like'])->name("feed.like");



