<?php

return [
    // 'feed_gen_service_did' => 'did:bsky:service:feedgen',
    'feed_gen_hostname' => env('FEEDGEN_HOSTNAME'),
    'feed_gen_publisher_did' => env('FEEDGEN_PUBLISHER_DID'),

    'base_url' => 'https://bsky.social',
    'handle' => env('BLUESKY_HANDLE'),
    'password' => env('BLUESKY_APP_PASSWORD'),

    'record_name' => 'sup',
    'display_name' => 'Stand Up Paddleboarding',
    'description' => "A dedicated feed for all posts about Stand Up Paddleboarding. Whether you're a seasoned paddler or just starting, this is the place to share and discover everything about the topic.",
    'avatar_path' => resource_path('img/sup-feed-avatar.png'),
];
