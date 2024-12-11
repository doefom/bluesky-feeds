<?php

namespace App\Http\Integrations\Bluesky\Requests\AppBskyActor;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetProfileRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    public function __construct(protected readonly string $actor)
    {
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/xrpc/app.bsky.actor.getProfile';
    }

    protected function defaultQuery(): array
    {
        return [
            'actor' => $this->actor,
        ];
    }
}
