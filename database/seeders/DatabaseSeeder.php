<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Specialized Users
        $users = [
            [
                'name' => 'Tactical Command',
                'email' => 'admin@radiant-intel.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Brimstone',
                'email' => 'brimstone@radiant-intel.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Cypher',
                'email' => 'cypher@radiant-intel.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Sova',
                'email' => 'sova@radiant-intel.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Viper',
                'email' => 'viper@radiant-intel.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }

        // Valorant Specific Seeded Posts
        $posts = [
            // Patch Notes
            [
                'title' => 'Patch 12.08 Analysis: The Return of Ascent Meta',
                'excerpt' => 'Riot Games has rotated Ascent back into the active pool. We dive deep into why this shifts the meta toward high-mobility initiators.',
                'content' => "The latest VALORANT update, Patch 12.08, has officially reinstated **Ascent** into the Competitive and Deathmatch pools. This move marks a strategic pivot away from the teleporter-heavy playstyles of Bind toward classic mid-control dominance.

### Key Takeaways:
*   **Ascent Return**: Classic A/B split strategies are back.
*   **Initiator Resurgence**: Sova and Tejo are seeing nearly 100% pick rates in early scrims.
*   **Veto Counters**: New sentinel Veto is proving essential for stopping B-site executes.

For more tactical breakdowns, check our dedicated Map Intel section.",
                'image_path' => 'https://media.valorant-api.com/maps/7eaecc1b-4337-bbf6-6ab9-04b8f06b3319/splash.png',
            ],
            [
                'title' => 'The Meta Now: Episode 8 Act III Pro Tier List',
                'excerpt' => 'Who are the top performers in the current act? Neon and Miks dominate the S-tier in our latest pro-level analysis.',
                'content' => "As we settle into Episode 8 Act III, the power rankings have solidified around a high-speed, high-sustain core.

**S-Tier (The Big Three)**:
1.  **Neon**: Unmatched entry speed and high-gear accuracy.
2.  **Miks**: The first healing controller is mandatory for mid-round resets.
3.  **Veto**: The ultimate utility-denial specialist.

**A-Tier**:
*   **Waylay**: Her 'Hinder' debuff is a nightmare for aggressive duelists.
*   **Jett**: Still a top-tier operator pick despite mobility nerfs.",
                'image_path' => 'https://media.valorant-api.com/agents/bb2a4828-46eb-8cd1-e765-15848195d751/fullportrait.png',
            ],
            // Agent Intel
            [
                'title' => 'Miks Deep Dive: Mastering the First Healing Controller',
                'excerpt' => 'Agent 30 has changed the way we think about the Controller role. Learn how to balance smoke placement with teammate sustain.',
                'content' => "Miks (Agent 30) from Croatia has redefined the 'healer' archetype by merging it with the Controller role. His signature ability, **Decibel Drop**, creates a tactical zone that isn't just about vision blocking—it's about sound manipulation.

### Pro Tips for Miks:
*   **Harmonize**: Don't use your heal too early. Save it for the reset after the initial trade.
*   **Decibel Drop**: Place this at chokepoints to muffle your team's entry while amplifying enemy repositioning.
*   **Amplification (Ultimate)**: Coordinate with Neon or Waylay to make their mobility even more punishing.",
                'image_path' => 'https://media.valorant-api.com/agents/e370fa57-4757-3604-3648-499e1f642d3f/fullportrait.png',
            ],
            [
                'title' => 'Veto vs. Killjoy: The Battle of the B-Site Sentinels',
                'excerpt' => 'With Ascent back, the question is: who holds the fort better? Veto’s anti-utility kit vs. Killjoy’s area denial.',
                'content' => "For years, Killjoy has been the queen of Ascent's B-site. But Veto (Agent 29) has arrived with a kit designed to specifically dismantle 'set-play' sentinels.

**Why pick Veto?**
His **Interceptor** device can destroy incoming mollies, shocks, and even Fade's Haunt mid-air. This makes the standard post-plant lineups on Ascent B-site much less reliable.

**Why stick with Killjoy?**
Her **Lockdown** still remains the single best ultimate for full site retakes or executes. If the enemy isn't running Veto, Killjoy is still the superior choice for raw damage output.",
                'image_path' => 'https://media.valorant-api.com/agents/1e58de9c-4950-5125-93e9-a0aee9f98746/fullportrait.png',
            ],
            // Map Intel
            [
                'title' => 'Ascent 2026: The Essential Mid-Control Guide',
                'excerpt' => 'If you lose Mid, you lose the round. Here are the 5 smokes and 3 lineups you need for Patch 12.08.',
                'content' => "Mid control on Ascent is more important than ever in 2026. With the introduction of agents like Tejo and Waylay, the angles have changed.

### The New 'Standard' Mid Play:
1.  **Waylay Flash**: Use 'Photon Flash' to clear 'Top Mid' immediately.
2.  **Miks Smoke**: Block off 'Market' and 'Pizza' with a single *Harmonize* pulse.
3.  **Tejo Recon**: Send a 'Recon Drone' toward 'Catwalk' to spot the rotating Sentinel.

Mastering these steps ensures your team can rotate through 'Tiles' or 'B-Link' with minimal risk.",
                'image_path' => 'https://media.valorant-api.com/maps/7eaecc1b-4337-bbf6-6ab9-04b8f06b3319/splash.png',
            ],
            [
                'title' => 'Lotus Rotations: Using the New 12.00 Door Timers',
                'excerpt' => 'Riot adjusted the rotating doors in the previous big update. We analyze the timings for perfect flanking.',
                'content' => "Lotus continues to be a map defined by its rotating doors. Since the 12.00 timing adjustment, flanking through 'A-Link' has become a more calculated risk.

The current rotation takes **0.5 seconds longer** to complete, but the sound cues have been muffled. This is a massive buff for stealth-oriented agents like Omen and Cypher. If you time your entry with a Miks *Decibel Drop*, you can practically walk through the door unheard.",
                'image_path' => 'https://media.valorant-api.com/maps/2fe4ed3a-450a-948b-6d6b-e89a78e680a9/splash.png',
            ],
            // Guides
            [
                'title' => 'The Bandit Sidearm: When to Buy and When to Pass',
                'excerpt' => 'The Bandit has replaced the Sheriff for many pros. We break down the damage falloff and fire rate stats.',
                'content' => "The **Bandit** has solidified its place as the premier 'light-buy' weapon in 2026. While it lacks the extreme long-range lethality of the Sheriff, its faster recovery time makes it a monster in medium-range duels.

### Bandit vs. Sheriff:
*   **Fire Rate**: Bandit is 15% faster.
*   **Accuracy**: Bandit has less first-bullet deviation when moving slowly.
*   **Damage**: Bandit fails to one-shot headshot against heavy armor at 30m+.

**Conclusion**: Buy the Bandit on Eco rounds where you expect close-quarters site defense. Stick to the Sheriff for long-range holding on maps like Breeze.",
                'image_path' => 'https://media.valorant-api.com/weapons/e336c6b8-418d-9340-d77f-7a9e4cfe0702/displayicon.png',
            ],
            [
                'title' => 'Skirmish: Ascension Strategy - The 1v1 Survival Guide',
                'excerpt' => 'The new ranked mode is all about raw aim. Here is how to pick your single ability for maximum impact.',
                'content' => "Skirmish: Ascension is VALORANT's take on pure mechanical competition. With only one signature ability allowed, your choice defines your entire round.

**Top Choices for Skirmish**:
1.  **Iso (Double Tap)**: The shield is invaluable in 1v1 duels.
2.  **Reyna (Dismiss)**: Perfect for resetting after a kill in 2v2 situations.
3.  **Neon (High Gear)**: Superior positioning wins duels before they even start.

Focus on your crosshair placement—utility won't save you here.",
                'image_path' => 'https://media.valorant-api.com/agents/0e38b510-41a8-5780-5e8f-568b2a4f2d6c/fullportrait.png',
            ],
            [
                'title' => 'Night Market: May 2026 Best Value Picks',
                'excerpt' => 'The Night Market is back. We list the top skins you should be looking for in your personalized shop.',
                'content' => "It’s that time of the month again. The Night Market has returned from May 7 to May 28. 

If you are lucky enough to roll the **Kuronami Vandal** or any **Radiant Entertainment System** pieces, they are near-mandatory buys at 30%+ off. Rumor has it the **Evori Dreamwings** collection has also been added to the premium pool this time around. Good luck on your rolls, agents!",
                'image_path' => 'https://media.valorant-api.com/agents/569fdd95-4d10-43ab-ca70-79becc718b46/fullportrait.png',
            ],
        ];

        foreach ($posts as $postData) {
            Post::create($postData);
        }
    }
}
