<?php

use App\Http\Controllers\FeedController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/.well-known/did.json', [FeedController::class, 'getDidDocument']);

Route::get('/getFeedSkeleton', [FeedController::class, 'getFeedSkeleton']);
Route::get('/xrpc/app.bsky.feed.getFeedSkeleton', [FeedController::class, 'getFeedSkeleton']);
