<?php

namespace App\Console\Commands;

use App\Constants\Hashtag;
use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Ratchet\Client\Connector;

class SubscribeToFirehose extends Command
{
    protected $signature = 'firehose:subscribe';

    protected $description = 'Subscribe to the firehose and filter SUP-related posts';

    public function handle(): void
    {
        $connector = new Connector;

        $firehose = config('app.firehose.endpoint');

        // Connect to the firehose websocket
        $connector($firehose)->then(function ($conn) {
            $this->info('Connected to the firehose.');

            // Listen for messages
            $conn->on('message', function ($message) {
                try {
                    $payload = json_decode($message->getPayload(), true);

                    $this->processCommit($payload);
                } catch (\Exception $e) {
                    $this->error('Failed to process message: '.$e->getMessage());
                }
            });

            // Handle connection close
            $conn->on('close', function () {
                $this->info('Connection closed.');
            });
        })->catch(function ($error) {
            $this->error('Failed to connect to the firehose: '.$error->getMessage());
        });
    }

    private function processCommit(array $payload): void
    {
        if ($this->isCreatePost($payload)) {
            $this->processCreate($payload);
        }

        if ($this->isDeletePost($payload)) {
            $this->processDelete($payload);
        }
    }

    private function isCreatePost(array $payload): bool
    {
        $operation = Arr::get($payload, 'commit.operation');
        $collection = Arr::get($payload, 'commit.collection');

        return $operation === 'create' && $collection === 'app.bsky.feed.post';
    }

    private function isDeletePost(array $payload): bool
    {
        $operation = Arr::get($payload, 'commit.operation');
        $collection = Arr::get($payload, 'commit.collection');

        return $operation === 'delete' && $collection === 'app.bsky.feed.post';
    }

    private function processCreate(array $payload): void
    {
        $did = Arr::get($payload, 'did');
        $cid = Arr::get($payload, 'commit.cid');
        $rkey = Arr::get($payload, 'commit.rkey');
        $text = Arr::get($payload, 'commit.record.text');

        $words = preg_split('/\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);
        $hasStrongHashtag = ! empty(array_intersect($words, Hashtag::STRONG_HASHTAGS));

        if (! $hasStrongHashtag) {
            return;
        }

        Post::query()->create([
            'uri' => "at://$did/app.bsky.feed.post/$rkey",
            'cid' => $cid,
        ]);
    }

    private function processDelete(array $payload): void {}
}
