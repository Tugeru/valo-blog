<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@radiant-intel.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);

        // Valorant Specific Seeded Posts
        $posts = [
            [
                'title' => 'Patch 12.08: The Return of Ascent and the Rise of Skirmish',
                'excerpt' => 'Riot Games has released Patch 12.08, bringing back the fan-favorite map Ascent and introducing a brand-new competitive mode: Skirmish Ascension.',
                'content' => "The latest VALORANT update, Patch 12.08, is here and it's making waves in the community. The headline change is the return of Ascent to the Competitive and Deathmatch pools, while Bind takes a bow and rotates out. 

But the real talk of the town is 'Skirmish: Ascension'. This new fast-paced, skill-forward ranked mode focuses on 1v1 and 2v2 gunplay. Players can choose from a curated roster of 14 agents, each equipped with only one signature ability. It's the ultimate test of raw aim and positioning.

Additionally, this patch includes several bug fixes, notably addressing a sound glitch with Viper's Toxic Screen and targeting bugs for the latest agent, Tejo.",
                'image_path' => 'https://media.valorant-api.com/maps/7eaecc1b-4337-bbf6-6ab9-04b8f06b3319/splash.png',
            ],
            [
                'title' => 'Meet Miks: The Sound-Based Controller Shaking Up the Meta',
                'excerpt' => 'Released in March, the Croatian Controller Miks is already redefining how professional teams approach site execution and defensive holds.',
                'content' => "Miks, the newest addition to the VALORANT protocol, has taken the controller role by storm. Hailing from Croatia, Miks is designed around 'amplifying' situations with sound-based utility. 

Unlike traditional controllers who rely on vision blocking, Miks uses acoustic resonance to disorient enemies and provide intel. His signature ability, 'Decibel Drop', creates a zone where enemy footsteps are amplified while teammate sounds are muffled, allowing for silent executes that leave defenders guessing. 

Pro players have already started integrating Miks into their Haven and Lotus compositions, leading to some of the most creative plays we've seen in the VCT Stage 1 so far.",
                'image_path' => 'https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/fullportrait.png',
            ],
            [
                'title' => 'The Bandit: Is the New Sidearm a Sheriff Killer?',
                'excerpt' => 'The Bandit is the first new weapon added to VALORANT in years. We dive into the stats to see if it deserves a spot in your light-buy rounds.',
                'content' => "Patch 12.00 introduced 'The Bandit', a new sidearm that sits comfortably between the Ghost and the Sheriff. Designed as a viable 'light purchase' option, the Bandit is capable of one-shot headshots against enemies with light armor at medium range.

Statistically, the Bandit has a faster fire rate than the Sheriff but lower wall penetration. Its unique selling point is the 'Quick Draw' mechanic, which reduces the pull-out time significantly compared to other sidearms. 

In our testing, the Bandit shines in eco-rounds where you expect the enemy to be on light armor, but it still struggles against full-buys at long distances. Is it a Sheriff killer? Not quite, but it certainly offers a new tactical layer to the pistol meta.",
                'image_path' => 'https://media.valorant-api.com/weapons/e336c6b8-418d-9340-d77f-7a9e4cfe0702/displayicon.png',
            ],
            [
                'title' => 'Masters London: The Road to VCT Stage 1 Glory',
                'excerpt' => 'The Stage 1 Playoffs are underway. Who will represent their region in the historic Masters London later this June?',
                'content' => "The VCT 2026 season is heating up as teams across Americas, EMEA, Pacific, and China fight for their lives in the Stage 1 Playoffs. At stake? A coveted spot at Masters London.

In the Americas, the usual giants are facing stiff competition from rising underdogs who have mastered the 'Skirmish' style of play. Meanwhile, in EMEA, the Miks-meta has led to some incredibly close series, with tactical depth reaching an all-time high.

Masters London promises to be one of the most significant events in VALORANT history, featuring the first international appearance of 'The Bandit' weapon in professional play. Stay tuned as we cover every match leading up to the grand finals.",
                'image_path' => 'https://media.valorant-api.com/agents/add6443a-41bd-e414-f6ad-e58d267f4e95/fullportrait.png',
            ],
            [
                'title' => 'Night Market Returns this May: Is Your Favorite Skin on Sale?',
                'excerpt' => 'The Night Market is back from May 7 to May 28. Get your wallets ready for some of the best deals on Select, Deluxe, and Premium tiers.',
                'content' => "Riot has confirmed that the Night Market will return once again, running through the majority of May 2026. This is your chance to snag that elusive skin you've been eyeing at a significant discount.

The pool includes skins from the Select, Deluxe, and Premium tiers. Rumors suggest that the original Kuronami collection might finally make its way into some lucky players' markets this time around. 

Remember, the offers are unique to each player and once the market opens, the items are locked for the duration of the event. Good luck on your rolls!",
                'image_path' => 'https://media.valorant-api.com/agents/569fdd95-48a0-4b13-9fc7-1fe1e78b3698/fullportrait.png',
            ],
        ];

        foreach ($posts as $postData) {
            \App\Models\Post::create($postData);
        }
    }
}
