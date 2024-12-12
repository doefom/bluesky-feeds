<?php

namespace App\Console\Commands;

use App\Clients\Bluesky;
use Illuminate\Console\Command;

class Playground extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $bluesky = new Bluesky;
        $bluesky->authenticate(config('bluesky.handle'), config('bluesky.password'));

        $repo = config('bluesky.feed_gen_publisher_did');
        $collection = 'app.bsky.feed.generator';
        $rkey = config('bluesky.record_name');
        $avatarPath = config('bluesky.avatar_path');

        // $res = $bluesky->deleteRecord($repo, $collection, $rkey);
        $res = $bluesky->uploadBlob($avatarPath);

        dd($res);
    }
}
