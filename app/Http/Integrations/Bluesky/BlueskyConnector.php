<?php

namespace App\Http\Integrations\Bluesky;

use Saloon\Http\Connector;

class BlueskyConnector extends Connector
{
    public function __construct(protected readonly string $baseUrl) {}

    /**
     * Define the base URL for the Bluesky API.
     * Typically, this would be the PDS service endpoint.
     * The default public PDS is https://bsky.social.
     * You can also use env variables: env('BLUESKY_BASE_URL', 'https://bsky.social')
     */
    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }
}
