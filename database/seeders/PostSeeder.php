<?php

namespace Database\Seeders;

use App\Models\Feed;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // -------------------------------------------------------------------------------------------
        // SUP POSTS
        // -------------------------------------------------------------------------------------------

        $feedSup = Feed::query()->where('record_name', 'sup')->first();

        $postsSup = [
            ['uri' => 'at://did:plc:surxzhejohzswnhaz4apnent/app.bsky.feed.post/3lcvgixnenc2u', 'cid' => 'bafyreiggigqkmwcqjybh5awxr4nymonkt6qdohircricmfpag5t2hx2ykq'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lcvpnwuebk2u', 'cid' => 'bafyreidtzzqjvpf5b5mku6y226sspdrozkhbwjjic2b2gswts7oi2g4ucm'],
            ['uri' => 'at://did:plc:umdzynhxs7yutiuah6wtb5qj/app.bsky.feed.post/3lcw5sis7cc2i', 'cid' => 'bafyreieqox2ycoou6cptyzgogpmonowfxyz25ow6vzuv4zzq56ruxdwtym'],
            ['uri' => 'at://did:plc:5sinuijhoagkjf4moifqspnl/app.bsky.feed.post/3lcwosdtj6222', 'cid' => 'bafyreiamw6krkzptlkuaxqg6suheyt5eqzrj4jotxkycnvhdw52td4y2ku'],
            ['uri' => 'at://did:plc:khs6neht22za5x2xldupesij/app.bsky.feed.post/3lcxe36nx4s2l', 'cid' => 'bafyreihyx45zdwlngxfxsmvvxn72nt3mj6rn4onaos4tme33kxf2xopica'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lcximzkxac26', 'cid' => 'bafyreicrbeqgq7slzkopndunx4rq4bh6nzcsz6k63t4f7aaikgqyrxk4h4'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lcy4wlblos2w', 'cid' => 'bafyreigfme7vwycky6prvpdbuv3d7ut6hs7aoqingsf4soo3up3ecmfowu'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lczwc2eacc24', 'cid' => 'bafyreici47qc4z6y63zsfcsfygxjuqe3o6ivwmu3f7amip4nxhrhcl5mg4'],
            ['uri' => 'at://did:plc:surxzhejohzswnhaz4apnent/app.bsky.feed.post/3ld4ufnuh5k2b', 'cid' => 'bafyreiddxdanyap52wseh42vjtpytufe47ni25gmt3qbdkvwnn3s6vr764'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3ld4ynsanps25', 'cid' => 'bafyreig6l24b6w4hrjq4olwomg56czfs5p6kpzijpgvscr4t5zo5w3ad54'],
            ['uri' => 'at://did:plc:zdogvxxbdqzfxh6dpiod76mf/app.bsky.feed.post/3ld5j6gvbwe2f', 'cid' => 'bafyreidmxgxs6bifbkp4ewnrogyourvhoe4q2onclxjuntwjpe347mkriy'],
            ['uri' => 'at://did:plc:5ik66xtq5x5idg3revc4jfnm/app.bsky.feed.post/3ld6mgai7hk2l', 'cid' => 'bafyreibvwgko6jnar46kjsxloh62yftyuoqbfje2k243lqapgyilov2yai'],
            ['uri' => 'at://did:plc:surxzhejohzswnhaz4apnent/app.bsky.feed.post/3ld7ehtw5bm2s', 'cid' => 'bafyreigkfdjmcjf3zux4maf5gddargowcfzpy6jsoy3qkrzyipltztlxoe'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3ldcabsev7s2v', 'cid' => 'bafyreightlevhetfmd3ghajjy5b6ph4lmnq7to62kqtiltrovcsh2oxzlq'],
            ['uri' => 'at://did:plc:mrntu6x5rpuvcgscqm7hchrc/app.bsky.feed.post/3lddsjy7gck2h', 'cid' => 'bafyreid2q2uj2n3cbdavt65nhpnptgp2uyjdnul4u6b2xlxagwjvrcaeqe'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lde5kvfgw22t', 'cid' => 'bafyreihjd7iizwzbms5h57ndsnlsh4nik5oawjkcenlakmxzu2l4tbgj24'],
            ['uri' => 'at://did:plc:qo4xi7d4ewxwbovb5xdimaty/app.bsky.feed.post/3ldeffcrtd32r', 'cid' => 'bafyreidksslqrhda5ewtsm47msuunymyuagvlzo5e7znjg2hzfhcxcbwxa'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3ldh7nfco7k2i', 'cid' => 'bafyreieg7ddk3tm3c53fxzlejktn6vozoynf2n3va263gnoo2ccn2vaghi'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3ldlqukg74k2m', 'cid' => 'bafyreicj4l6iw2pucnauzidc4iopyriynknsrqvtvluvi7audgpzaadj6u'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3ldmcjr43rc2h', 'cid' => 'bafyreiammvpik24jhcnszunza4v2dz5rejbioloxjdmo4ndsfxlmyh7aea'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3ldobl4pm422a', 'cid' => 'bafyreiaqtes3ky3ua5lr2rx2i5ykphstb4hxj2es7dvesgew2txci5l2ie'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3ldovuu46t22r', 'cid' => 'bafyreibxr4pudyrjspzgxyeculgkmndcqldxh5uzcui3yudqb6dt2ic6im'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3ldqq66sah22c', 'cid' => 'bafyreieljofxw2g7hdfzgvdrzyouhmmcnskc425yh5erteob3vf6liqf24'],
            ['uri' => 'at://did:plc:axqaboy6n7rpqsrshhzawpsc/app.bsky.feed.post/3lds7wy2imc2b', 'cid' => 'bafyreih2vvwg57y43vgtvwquqykavg62kjmgavacieocc2u6f747cfq5oe'],
            ['uri' => 'at://did:plc:mru5l37azzc6eolxobsxxqxr/app.bsky.feed.post/3ldtf4w2nks2g', 'cid' => 'bafyreihiyzb55bdorgjyy7ervvk2bpdb6guwbazojxs25llymn5ufy6wpm'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3ldxqxxa3mc2o', 'cid' => 'bafyreiacx7rrjwp7v3ess2kkavwsctbcnujs3t5c4lu7vkord7yge2ltri'],
            ['uri' => 'at://did:plc:jvpljfbcudcdtw6mf5wnmobu/app.bsky.feed.post/3ldzmmug32k2x', 'cid' => 'bafyreihnfkwjttmkif6fs56a3bwyetgqttn4nxvxj3ktk6vdgabjudo2ly'],
            ['uri' => 'at://did:plc:dyljcd2yjl76grh4px27zrgc/app.bsky.feed.post/3le5zpsg6nc2c', 'cid' => 'bafyreidd3r4jjwwbcbkqgdiwbzyq2iddhcq7eol3ixxcqmc3j7ltotr4i4'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3le7v5f4nrs2m', 'cid' => 'bafyreianggpbsdd4hd477v7isfkfodiwqe262qmmgirj23dntoii7t7wui'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lec6rn7ry226', 'cid' => 'bafyreihuixsdoynucnhasdb2spdz6mnzckst7z2dm6crzinw6r64l4cpnm'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lecyjfgihs2c', 'cid' => 'bafyreihpurr4ioln2ctov2k6rxj2gxvzavk7l7kpdmu5muv42tdkb3oyay'],
            ['uri' => 'at://did:plc:otpse5r6dphwe5rjpsotky4b/app.bsky.feed.post/3lef5dvci322n', 'cid' => 'bafyreiafjdl2utsqg33o62rihzwvwum6vlxncj46akfegfn4txejtkcguu'],
            ['uri' => 'at://did:plc:xl633z6vms4kp3b4zeuwph2n/app.bsky.feed.post/3lehvbzyl5k2y', 'cid' => 'bafyreibjhzvnryqw24xoufzyfhgucn4ijpfif6pikbhu6daizocuothcti'],
            ['uri' => 'at://did:plc:qo4xi7d4ewxwbovb5xdimaty/app.bsky.feed.post/3lej7idth4s2c', 'cid' => 'bafyreifumxqpw2mhozksnqdax35yws4qsifnd2s3goslwffqxowb5ege74'],
            ['uri' => 'at://did:plc:surxzhejohzswnhaz4apnent/app.bsky.feed.post/3lej7qqxg522h', 'cid' => 'bafyreiav23cfamrxrvjbrf2paueo5x3qwcfkiuzl67ptjhharsxkdsigsq'],
            ['uri' => 'at://did:plc:huo5yychqhf6ifzoxek7bs4y/app.bsky.feed.post/3lekg6fyp4s2s', 'cid' => 'bafyreiheko67hgzd2i7hmtvq2dlexco2n4q2y7dsczkaa6ylklfbpqsgrm'],
            ['uri' => 'at://did:plc:huo5yychqhf6ifzoxek7bs4y/app.bsky.feed.post/3lekgcvqbnk2s', 'cid' => 'bafyreihhtifejg6kyf4i3wowu3vhmpr47h7fgwet5sscnen6w2xx7fcule'],
        ];

        foreach ($postsSup as $post) {
            $feedSup->posts()->create($post);
        }

        // -------------------------------------------------------------------------------------------
        // 3D PRINTING POSTS
        // -------------------------------------------------------------------------------------------

        $feed3DPrinting = Feed::query()->where('record_name', '3d-printing')->first();

        $posts3DPrinting = [
            ['uri' => 'at://did:plc:wzxsg3lasghtdjnlsa6a45pn/app.bsky.feed.post/3lizdcqrfjc2a', 'cid' => 'bafyreigwmzluyz6unhzrugd2jgvtssfyaswmstqcke3lat4hq7h5lcxbye'],
        ];

        foreach ($posts3DPrinting as $post) {
            $feed3DPrinting->posts()->create($post);
        }
    }
}
