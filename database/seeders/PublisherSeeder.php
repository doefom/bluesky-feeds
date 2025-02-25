<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $publishers = config('bluesky.publishers');

        foreach ($publishers as $publisher) {
            Publisher::query()->create([
                'feed_gen_publisher_did' => $publisher['feed_gen_publisher_did'],
                'handle' => $publisher['handle'],
                'password' => encrypt($publisher['password']),
            ]);
        }

    }
}
