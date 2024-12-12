<?php

namespace App\Console\Commands;

use App\Clients\Bluesky;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class BlueskyRepoPublish extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bsky:repo-publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $feedGenPublisherDid = config('bluesky.feed_gen_publisher_did');
        $feedGenHostname = config('bluesky.feed_gen_hostname');

        $recordName = config('bluesky.record_name');
        $displayName = config('bluesky.display_name');
        $description = config('bluesky.description');
        $avatarPath = config('bluesky.avatar_path');

        $handle = config('bluesky.handle');
        $password = config('bluesky.password');

        $bluesky = new Bluesky;
        $bluesky->authenticate($handle, $password);
        $uploadBlobRes = $bluesky->uploadBlob($avatarPath);
        $blob = Arr::get($uploadBlobRes, 'blob');

        //{
        //  repo: 'did:plc:surxzhejohzswnhaz4apnent',
        //  collection: 'app.bsky.feed.generator',
        //  rkey: 'sup',
        //  record: {
        //    did: 'did:web:sup-feed.durchpaddeln.de',
        //    displayName: 'Stand Up Paddleboarding',
        //    description: "A dedicated feed for all posts about Stand Up Paddleboarding. Whether you're a seasoned paddler or just starting, this is the place to share and discover everything about the topic.",
        //    avatar: BlobRef {
        //      ref: CID(bafkreihihwrgahrpdjvsvdkdxurayukpt54tni3jrfgymibqf7fofxkjlu),
        //      mimeType: 'image/png',
        //      size: 995243,
        //      original: [Object]
        //    },
        //    createdAt: '2024-12-10T16:31:15.264Z'
        //  }
        //}

        $record = [
            'did' => 'did:web:sup-feed-generator.durchpaddeln.de',
            'displayName' => $displayName,
            'description' => $description,
            'avatar' => $blob,
            'createdAt' => now()->toIso8601String(),
        ];
        $bluesky->putRecord($feedGenPublisherDid, 'app.bsky.feed.generator', $recordName, null, $record);
    }
}
