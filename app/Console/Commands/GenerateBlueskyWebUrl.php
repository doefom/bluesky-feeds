<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class GenerateBlueskyWebUrl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bsky:web {id : The ID of the post}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the Bluesky web URL for a given post ID';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = $this->argument('id');
        $post = Post::find($id);

        if (! $post) {
            $this->error("Post with ID $id not found.");

            return;
        }

        // Extract the DID and post key from the URI
        if (preg_match('/at:\/\/did:plc:([a-z0-9]+)\/app\.bsky\.feed\.post\/([a-z0-9]+)/i', $post->uri, $matches)) {
            $did = $matches[1];
            $postKey = $matches[2];
            $url = "https://bsky.app/profile/did:plc:$did/post/$postKey";

            $this->info("Bluesky URL: $url");
        } else {
            $this->error("Invalid URI format: {$post->uri}");
        }
    }
}
