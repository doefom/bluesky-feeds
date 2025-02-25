<?php

namespace App\Console\Commands;

use App\Clients\Bluesky;
use App\Models\Feed;
use App\Models\Publisher;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Crypt;

class BlueskyRepoUnpublish extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bsky:repo-unpublish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Unpublish a feed from Bluesky';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $feedSlug = $this->ask('Which feed do you want to unpublish? (slug)');

        $feed = Feed::query()->where('slug', $feedSlug)->firstOrFail();
        /* @var Publisher $publisher */
        $publisher = $feed->publisher;

        $bluesky = new Bluesky;
        $bluesky->authenticate($publisher->handle, Crypt::decrypt($publisher->password));

        $repo = $publisher->feed_gen_publisher_did;
        $collection = 'app.bsky.feed.generator';
        $rkey = $feed->record_name;

        $bluesky->deleteRecord($repo, $collection, $rkey);

        $this->info('Record unpublished successfully');
    }
}
