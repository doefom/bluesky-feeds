<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'uri' => 'at://did:plc:surxzhejohzswnhaz4apnent/app.bsky.feed.post/3lcvgixnenc2u',
                'cid' => 'bafyreiggigqkmwcqjybh5awxr4nymonkt6qdohircricmfpag5t2hx2ykq'
            ],
            [
                'uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lcvpnwuebk2u',
                'cid' => 'bafyreidtzzqjvpf5b5mku6y226sspdrozkhbwjjic2b2gswts7oi2g4ucm'
            ],
            [
                'uri' => 'at://did:plc:umdzynhxs7yutiuah6wtb5qj/app.bsky.feed.post/3lcw5sis7cc2i',
                'cid' => 'bafyreieqox2ycoou6cptyzgogpmonowfxyz25ow6vzuv4zzq56ruxdwtym'
            ],
            [
                'uri' => 'at://did:plc:5sinuijhoagkjf4moifqspnl/app.bsky.feed.post/3lcwosdtj6222',
                'cid' => 'bafyreiamw6krkzptlkuaxqg6suheyt5eqzrj4jotxkycnvhdw52td4y2ku'
            ],
            [
                'uri' => 'at://did:plc:khs6neht22za5x2xldupesij/app.bsky.feed.post/3lcxe36nx4s2l',
                'cid' => 'bafyreihyx45zdwlngxfxsmvvxn72nt3mj6rn4onaos4tme33kxf2xopica'
            ],
            [
                'uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lcximzkxac26',
                'cid' => 'bafyreicrbeqgq7slzkopndunx4rq4bh6nzcsz6k63t4f7aaikgqyrxk4h4'
            ],
            [
                'uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lcy4wlblos2w',
                'cid' => 'bafyreigfme7vwycky6prvpdbuv3d7ut6hs7aoqingsf4soo3up3ecmfowu'
            ],
            [
                'uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lczwc2eacc24',
                'cid' => 'bafyreici47qc4z6y63zsfcsfygxjuqe3o6ivwmu3f7amip4nxhrhcl5mg4'
            ],
        ];

        foreach ($posts as $post) {
            Post::query()->create($post);
        }
    }
}
