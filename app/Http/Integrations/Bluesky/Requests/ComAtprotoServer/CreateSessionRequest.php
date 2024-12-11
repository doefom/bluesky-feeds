<?php

namespace App\Http\Integrations\Bluesky\Requests\ComAtprotoServer;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateSessionRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * The endpoint for creating a session. According to the AT Protocol docs:
     * POST /xrpc/com.atproto.server.createSession
     */
    public function resolveEndpoint(): string
    {
        return '/xrpc/com.atproto.server.createSession';
    }

    /**
     * Pass in the Bluesky handle and password (App Password) to the request.
     *
     * @param string $identifier The Bluesky handle, e.g. 'myhandle.bsky.social'
     * @param string $password   The user's password or App Password.
     */
    public function __construct(
        protected string $identifier,
        protected string $password
    ) {}

    /**
     * The data for the request.
     */
    protected function defaultBody(): array
    {
        return [
            'identifier' => $this->identifier,
            'password'   => $this->password,
        ];
    }
}
