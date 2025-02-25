<?php

namespace Database\Seeders;

use App\Models\Feed;
use App\Models\Publisher;
use Illuminate\Database\Seeder;

class FeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // -------------------------------------------------------------------------------------------
        // SUP FEED
        // -------------------------------------------------------------------------------------------

        $durchpaddeln = Publisher::query()->where('handle', 'durchpaddeln.de')->first();

        Feed::query()->create([
            'title' => 'SUP',
            'slug' => 'sup',
            'publisher_id' => $durchpaddeln->id,

            'record_name' => 'sup',
            'display_name' => 'Stand Up Paddleboarding',
            'description' => "A dedicated feed for all posts about Stand Up Paddleboarding. Whether you're a seasoned paddler or just starting, this is the place to share and discover everything about the topic. #standuppaddle #standuppaddleboarding #paddleboarding",
            'avatar_path' => resource_path('img/sup-feed-avatar.png'),
        ]);

        // -------------------------------------------------------------------------------------------
        // 3D PRINTING FEED
        // -------------------------------------------------------------------------------------------

        $doefom = Publisher::query()->where('handle', 'doefom.de')->first();

        Feed::query()->create([
            'title' => '3D Printing',
            'slug' => '3d-printing',
            'publisher_id' => $doefom->id,

            'record_name' => '3d-printing',
            'display_name' => '3D Printing',
            'description' => "A dedicated feed for all posts about 3D Printing. Whether you're a longtime printer or just starting, this is the place to share and discover everything about the topic. #3dprinting #3dprinter #3dprinted #3dprint",
            'avatar_path' => resource_path('img/3d-printing-feed-avatar.png'),
        ]);
    }
}
