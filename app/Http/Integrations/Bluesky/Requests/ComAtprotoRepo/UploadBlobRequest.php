<?php

namespace App\Http\Integrations\Bluesky\Requests\ComAtprotoRepo;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasStringBody;

class UploadBlobRequest extends Request implements HasBody
{
    use HasStringBody;

    /**
     * The HTTP method.
     */
    protected Method $method = Method::POST;

    /**
     * Create a new UploadBlobRequest instance.
     */
    public function __construct(
        protected readonly string $fileContent,
        protected readonly string $mimeType,
    ) {}

    /**
     * The endpoint for the uploadBlob method.
     */
    public function resolveEndpoint(): string
    {
        return '/xrpc/com.atproto.repo.uploadBlob';
    }

    /**
     * Return the raw file content as the request body.
     */
    public function defaultBody(): string
    {
        return $this->fileContent;
    }

    /**
     * Specify default headers.
     * We must set the Content-Type header to tell the server what we're sending.
     */
    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => $this->mimeType,
        ];
    }
}
