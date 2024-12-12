<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function getFeedSkeleton(Request $request)
    {
        $limit = $request->integer('limit', 10);
        $cursor = $request->integer('cursor');

        $posts = Post::query()
            ->when($cursor, fn ($query) => $query->where('id', '<', $cursor))
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();

        $feed = $posts->map(function ($post) {
            return ['post' => $post->uri];
        });

        return response()->json([
            'cursor' => $posts->last()?->id,
            'feed' => $feed,
        ]);
    }
}
