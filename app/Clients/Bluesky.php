<?php

namespace App\Clients;

use App\Http\Integrations\Bluesky\BlueskyConnector;
use App\Http\Integrations\Bluesky\Requests\AppBskyActor\GetProfileRequest;
use App\Http\Integrations\Bluesky\Requests\ComAtprotoRepo\DeleteRecordRequest;
use App\Http\Integrations\Bluesky\Requests\ComAtprotoRepo\PutRecordRequest;
use App\Http\Integrations\Bluesky\Requests\ComAtprotoRepo\UploadBlobRequest;
use App\Http\Integrations\Bluesky\Requests\ComAtprotoServer\CreateSessionRequest;
use Exception;
use JsonException;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Auth\TokenAuthenticator;

class Bluesky
{

    protected BlueskyConnector $connector;

    public function __construct()
    {
        $this->connector = new BlueskyConnector();
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     * @throws JsonException
     * @throws Exception
     */
    public function authenticate(string $handle, string $password): static
    {
        $res = $this->connector->send(new CreateSessionRequest($handle, $password));

        $accessToken = $res->json('accessJwt');

        if (!$accessToken) {
            throw new Exception('Failed to authenticate with Bluesky.');
        }

        $this->connector = $this->connector->authenticate(new TokenAuthenticator($accessToken));

        return $this;
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     * @throws JsonException
     */
    public function getProfile(string $actor): array
    {
        $res = $this->connector->send(new GetProfileRequest($actor));

        return $res->json();
    }

    public function putRecord(
        string $repo,
        string $collection,
        string $rkey,
        ?bool $validate = null,
        array $record,
        ?string $swapRecord = null,
        ?string $swapCommit = null
    )
    {
        $res = $this->connector->send(new PutRecordRequest($repo, $collection, $rkey, $validate, $record, $swapRecord, $swapCommit));

        return $res->json();
    }

    public function deleteRecord(
        string  $repo,
        string  $collection,
        string  $rkey,
        ?string $swapRecord = null,
        ?string $swapCommit = null
    ): array
    {
        $res = $this->connector->send(new DeleteRecordRequest($repo, $collection, $rkey, $swapRecord, $swapCommit));

        return $res->json();
    }

    public function uploadBlob(string $filePath): array
    {
        $fileContent = file_get_contents($filePath);
        $mimeType = mime_content_type($filePath);

        $res = $this->connector->send(new UploadBlobRequest($fileContent, $mimeType));

        return $res->json();
    }

}
