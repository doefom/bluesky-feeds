<?php

return [

    'base_url' => 'https://bsky.social',
    'feed_gen_hostname' => env('FEEDGEN_HOSTNAME'),

    'publishers' => [
        [
            // 'feed_gen_service_did' => 'did:bsky:service:feedgen',
            'feed_gen_publisher_did' => env('FEEDGEN_PUBLISHER_DID_DURCHPADDELN'),
            'handle' => env('BLUESKY_HANDLE_DURCHPADDELN'),
            'password' => env('BLUESKY_APP_PASSWORD_DURCHPADDELN'),
        ],
        [
            'feed_gen_publisher_did' => env('FEEDGEN_PUBLISHER_DID_DOEFOM'),
            'handle' => env('BLUESKY_HANDLE_DOEFOM'),
            'password' => env('BLUESKY_APP_PASSWORD_DOEFOM'),
        ],
    ],
];
