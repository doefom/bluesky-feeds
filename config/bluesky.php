<?php

return [
    'feed_gen_service_did' => env('FEEDGEN_SERVICE_DID'),
    'feed_gen_hostname' => env('FEEDGEN_HOSTNAME'),
    'feed_gen_publisher_did' => env('FEEDGEN_PUBLISHER_DID'),

    'handle' => env('BLUESKY_HANDLE'),
    'password' => env('BLUESKY_APP_PASSWORD'),
    'base_url' => env('BLUESKY_BASE_URL', 'https://bsky.social'),

    'record_name' => 'sup02',
    'display_name' => 'SUP Feed',
    'description' => "A dedicated feed for all posts about Stand Up Paddleboarding. Whether you're a seasoned paddler or just starting, this is the place to share and discover everything about the topic.",
    'avatar_path' => resource_path('img/sup-feed-avatar.png'),
];
