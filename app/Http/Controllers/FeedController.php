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
            'cursor' => strval($posts->last()?->id),
            'feed' => $feed,
        ]);
    }

    public function getDidDocument()
    {
        return response()->json([
            '@context' => ['https://www.w3.org/ns/did/v1'],
            'id' => 'did:web:' . config('bluesky.feed_gen_hostname'),
            'service' => [
                [
                    'id' => '#bsky_fg',
                    'type' => 'BskyFeedGenerator',
                    'serviceEndpoint' => 'https://' . config('bluesky.feed_gen_hostname')
                ]
            ]
        ]);
    }
}
