<?php

return [

    'publishers' => [
        [
            // 'feed_gen_service_did' => 'did:bsky:service:feedgen',
            'feed_gen_hostname' => env('FEEDGEN_HOSTNAME_DURCHPADDELN'),
            'feed_gen_publisher_did' => env('FEEDGEN_PUBLISHER_DID_DURCHPADDELN'),
            'base_url' => 'https://bsky.social',
            'handle' => env('BLUESKY_HANDLE_DURCHPADDELN'),
            'password' => env('BLUESKY_APP_PASSWORD_DURCHPADDELN'),
        ],
        [
            'feed_gen_hostname' => env('FEEDGEN_HOSTNAME_DOEFOM'),
            'feed_gen_publisher_did' => env('FEEDGEN_PUBLISHER_DID_DOEFOM'),
            'base_url' => 'https://bsky.social',
            'handle' => env('BLUESKY_HANDLE_DOEFOM'),
            'password' => env('BLUESKY_APP_PASSWORD_DOEFOM'),
        ],
    ],
];
