<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            'member_id' => 1,
            'title' => 'Valorant',
            'category' => 'Adventure',
            'platform' => 'Windows',
            'description' => '<div><strong>FIGHT AROUND THE WORLD</strong></div><div>Blend your style and experience on a global, competitive stage. Attack and defend your side using sharp gunplay and tactical abilities. And, with one life per-round, you will have to think faster than your opponent if you want to survive.<br><br></div><div><strong>CREATIVITY IS YOUR GREATEST WEAPON</strong></div><div>More than guns and bullets, you will choose an Agent armed with adaptive, swift, and lethal<strong> </strong>abilities that create opportunities to let your gunplay shine. Each map is purpose-built for team strategies, spectacular plays, and clutch moments. Make the plays others will imitate for years to come<br><br></div>',
            'minimumOS' => 'Windows 7/8',
            'minimumMemory' => 'RAM 4GB',
            'minimumGraphic' => 'Intel HD 4000, Radeon R5 200',
            'minimumProcessor' => 'Intel Core 2 Duo E8400 (Intel), Athlon 200GE (AMD)',
            'minimumStorage' => '15 GB',
            'recommendedOS' => 'Windows 10 (64-Bit)',
            'recommendedMemory' => 'RAM 4GB',
            'recommendedGraphic' => 'GeForce GT 730, Radeon R7 240',
            'recommendedProcessor' => 'Intel i3-4150 (Intel), Ryzen 3 1200 (AMD)',
            'recommendedStorage' => '15 GB',
            'game' => 'https://store.epicgames.com/en-US/p/valorant',
            'image' => 'game-images/mhujLMFrmNhLjRZnFc2IAQgDOf3v5mHVTXgPXLXz.jpg',
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            // 'excerpt' => Str::limit('A game about Seal Online Blade Of Destiny', 110, '...'),
            'excerpt' => 'FIGHT AROUND THE WORLD Blend your style and experience on a global, competitive stage. Attack and defend your s...',
        ]);

        DB::table('games')->insert([
            'member_id' => 1,
            'title' => 'Dread Out 2',
            'category' => 'Horror',
            'platform' => 'Windows',
            'description' => '<div>A unique take on third-person action-adventure survival horror with Indonesian supernatural in veins. Mixed gameplay of city exploring, “DreadOut” style smartphone ghost hunting and new action-packed combat within DreadOut supernatural realm. Even though it is a Horror game in veins, but with the touch of silly high school problems, satiric social commentaries, and yet touchy memorable moments, DreadOut 2 will become a fresh take on the survival horror genre.</div>',
            'minimumOS' => 'Windows 8.1',
            'minimumMemory' => '4 GB RAM',
            'minimumGraphic' => ' GTX 770 with 2GB VRAM / Radeon R9 280X 3GB',
            'minimumProcessor' => 'Intel i5 3570K / AMD FX-8350',
            'minimumStorage' => '16 GB available space',
            'recommendedOS' => 'Windows 10',
            'recommendedMemory' => '16 GB RAM',
            'recommendedGraphic' => 'GeForce GT 730, Radeon R7 240',
            'recommendedProcessor' => 'Intel i7',
            'recommendedStorage' => '16 GB available space',
            'game' => 'https://store.steampowered.com/app/945710/DreadOut_2/',
            'image' => 'game-images/YnezGAQWpqN39WixSZwBj2KHVNz1AjqIuTrGBRoa.jpg',
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            // 'excerpt' => Str::limit('A game about Seal Online Blade Of Destiny', 110, '...'),
            'excerpt' => 'A unique take on third-person action-adventure survival horror with Indonesian supernatural in veins. Mixed ga...',
        ]);

        DB::table('games')->insert([
            'member_id' => 1,
            'title' => 'FallGuys',
            'category' => 'Action',
            'platform' => 'MacOS',
            'description' => '<div>You’re invited to dive and dodge your way to victory in the pantheon of clumsy. Rookie or pro? Solo or partied up? Fall Guys delivers ever-evolving, high-concentrated hilarity and fun. The only thing more important than winning is looking as ridiculous as possible while doing it. Grab the silliest costume you can and fall in line—the show\'s about to start!<br><br></div><div>Competitive &amp; Cooperative: Tumble between competitive free-for-alls and cooperative challenges—or take on the Blunderdome with up to 3 friends!<br><br></div><div>Play with Friends: Fall Guys supports cross-play, cross-platform parties and cross-progression via your Epic Games Account.<br><br></div><div>Ever-Evolving Content: Play stays fresh with Limited Time Events and new game modes. Each Season brings with it new costumes, collabs, obstacles and ways to play.<br><br></div><div>Gloriously Customizable: Choose from a multitude of Colors, Patterns, Costumes and Nameplates.<br><br></div>',
            'minimumOS' => 'Windows 10 64bit',
            'minimumMemory' => '8 GB RAM',
            'minimumGraphic' => 'NVIDIA GTX 660 or AMD Radeon HD 7950',
            'minimumProcessor' => 'Intel Core i5 or AMD equivalent',
            'minimumStorage' => '2 GB available space',
            'recommendedOS' => 'Windows 10 64bit',
            'recommendedMemory' => '8 GB RAM',
            'recommendedGraphic' => 'NVIDIA GTX 660 or AMD Radeon HD 7950',
            'recommendedProcessor' => 'Intel Core i5 or AMD equivalent',
            'recommendedStorage' => '2 GB available space',
            'game' => 'https://store.epicgames.com/en-US/p/fall-guys',
            'image' => 'game-images/WU1Q4xg3TOuZ2JXLU3KwkhL42CZKonpfHIUz3eMX.jpg',
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            // 'excerpt' => Str::limit('A game about Seal Online Blade Of Destiny', 110, '...'),
            'excerpt' => 'You’re invited to dive and dodge your way to victory in the pantheon of clumsy. Rookie or pro? Solo or partied...',
        ]);

        DB::table('games')->insert([
            'member_id' => 1,
            'title' => 'NARAKA: BLADEPOINT',
            'category' => 'Action',
            'platform' => 'MacOS',
            'description' => '<div>NARAKA: BLADEPOINT is a 60-player PVP mythical action combat experience with martial arts inspired melee combat, gravity defying mobility, vast arsenals of melee &amp; ranged weapons, legendary customizable heroes with epic abilities.<br><br>BATTLE REIMAGINED<br>A first of its kind melee focused, movement based, mythical multiplayer action combat experience.<br><br>AGILE SWORDPLAY<br>Poetically violent melee combat where Katanas and Greatswords, Bows and Muskets, hero skills and ultimates clash in brutal player battles.<br><br>TRAVEL BEYOND LIMITS<br>Move lightning fast using your grappling hook whether traversing the highest mountain or launching onto an unsuspecting opponent.<br><br>UNTOLD POWER<br>Customize and master a growing roster of legendary heroes, each imbues with their own skills, ultimates, and deadly playstyles.<br><br>KINGDOM IN RUINS<br>Explore the mysterious and breathtaking battlefield of war-torn Morus with a striking aesthetic inspired by Far Eastern legends and history.</div>',
            'minimumOS' => 'Windows 7 64-bit or newer',
            'minimumMemory' => '8 GB RAM',
            'minimumGraphic' => 'NVIDIA GeForce GTX 750TI or equivalent',
            'minimumProcessor' => 'Intel i5 4th generation or AMD FX 6300 or equivalent',
            'minimumStorage' => '20 GB available space',
            'recommendedOS' => 'Windows 10 64-bit',
            'recommendedMemory' => '16 GB RAM',
            'recommendedGraphic' => 'NVIDIA GeForce GTX 1060 6G or equivalent',
            'recommendedProcessor' => 'Intel i7 7th generation or equivalent',
            'recommendedStorage' => '20 GB available space',
            'game' => 'https://store.steampowered.com/app/1203220/NARAKA_BLADEPOINT/',
            'image' => 'game-images/yme2RJelv2UP7hDF35m3Bf1fuNtmstPp14AYDXWD.jpg',
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            // 'excerpt' => Str::limit('A game about Seal Online Blade Of Destiny', 110, '...'),
            'excerpt' => 'NARAKA: BLADEPOINT is a 60-player PVP mythical action combat experience with martial arts inspired melee comba...',
        ]);

        DB::table('games')->insert([
            'member_id' => 1,
            'title' => 'Tales of Arise',
            'category' => 'Role Playing',
            'platform' => 'Android',
            'description' => '<div>A world of nature drawn with the “Atmospheric Shader”:<br>We are introducing a new graphics shader, inspired by anime and watercolor painting. Characters with attractive designs travel among backgrounds filled with beautiful and delicate visuals.<br><br>Explore a world that feels alive:<br>Explore the world of Dahna, where a mix of unique, natural environments change in appearance based on the time of day. Climb over the rocky terrain, swim in rivers, gather around the campfire, cook food, head to the next town, defeat the master of an alien planet, and liberate the people!</div>',
            'minimumOS' => 'Windows 10 (64-bit Only)',
            'minimumMemory' => '8 GB RAM',
            'minimumGraphic' => 'GeForce GTX 760 or Radeon HD 7950',
            'minimumProcessor' => 'Intel Core i5-2300 or AMD Ryzen 3 1200',
            'minimumStorage' => '45 GB available space',
            'recommendedOS' => 'Windows 10 (64-bit Only)',
            'recommendedMemory' => '8 GB RAM',
            'recommendedGraphic' => 'NVIDIA GeForce GTX 1060 6G or equivalent',
            'recommendedProcessor' => 'Intel Core i5-4590 or AMD FX-8350',
            'recommendedStorage' => '45 GB available space',
            'game' => 'https://store.steampowered.com/app/740130/Tales_of_Arise/',
            'image' => 'game-images/V6ZZKTgBOv0mqkxnPHD0KQ2Gyeh3qgY3gYpzIpCx.jpg',
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            // 'excerpt' => Str::limit('A game about Seal Online Blade Of Destiny', 110, '...'),
            'excerpt' => 'A world of nature drawn with the “Atmospheric Shader”:We are introducing a new graphics shader, inspired by an...',
        ]);
        
        DB::table('games')->insert([
            'member_id' => 1,
            'title' => 'Monster Hunter: World',
            'category' => 'Adventure',
            'platform' => 'iOS',
            'description' => '<div><strong>Battle gigantic monsters in epic locales.</strong><br><br>As a hunter, you\'ll take on quests to hunt monsters in a variety of habitats.<br>Take down these monsters and receive materials that you can use to create stronger weapons and armor in order to hunt even more dangerous monsters.<br><br>In Monster Hunter: World, the latest installment in the series, you can enjoy the ultimate hunting experience, using everything at your disposal to hunt monsters in a new world teeming with surprises and excitement.<br><br><br><strong>Setting</strong><br>Once every decade, elder dragons trek across the sea to travel to the land known as the New World in a migration referred to as the Elder Crossing.<br><br>To get to the bottom of this mysterious phenomenon, the Guild has formed the Research Commission, dispatching them in large fleets to the New World.<br><br>As the Commission sends its Fifth Fleet in pursuit of the colossal elder dragon, Zorah Magdaros, one hunter is about to embark on a journey grander than anything they could have ever imagined.<br><br><strong><br>ECOSYSTEM</strong></div><div><strong>A World That Breathes Life</strong><br>There are various locations teeming with wildlife. Expeditions into these locales are bound to turn up interesting discoveries.<br><br><br><strong><br>HUNTING</strong></div><div><strong>A Diverse Arsenal, and an Indispensable Partner</strong><br>Your equipment will give you the power to need to carve out a place for yourself in the New World.<br><br><strong>The Hunter\'s Arsenal</strong><br>There are fourteen different weapons at the hunter\'s disposal, each with its own unique characteristics and attacks. Many hunters acquire proficiency in multiple types, while others prefer to attain mastery of one.<br><br><strong>Scoutflies</strong><br>Monster tracks, such as footprints and gashes, dot each locale. Your Scoutflies will remember the scent of a monster and guide you to other nearby tracks. And as you gather more tracks, the Scoutflies will give you even more information.<br><br><strong>Slinger</strong><br>The Slinger is an indispensable tool for a hunter, allowing you to arm yourself with stones and nuts that can be gathered from each locale.<br>From diversion tactics to creating shortcuts, the Slinger has a variety of uses, and allows you to hunt in new and interesting ways.<br><br><strong>Specialized Tools</strong><br>Specialized tools activate powerful effects for a limited amount of time, and up to two can be equipped at a time. Simple to use, they can be selected and activated just like any other item you take out on a hunt.<br><br><strong>Palicoes</strong><br>Palicoes are hunters\' reliable comrades out in the field, specialized in a variety of offensive, defensive, and restorative support abilities.<br>The hunter\'s Palico joins the Fifth Fleet with pride, as much a bona fide member of the Commission as any other hunter.<br><br></div>',
            'minimumOS' => 'WINDOWS® 7, 8, 8.1, 10 (64-bit required)',
            'minimumMemory' => '8 GB RAM',
            'minimumGraphic' => 'NVIDIA® GeForce® GTX 760 or AMD Radeon™ R7 260x (VRAM 2GB)',
            'minimumProcessor' => 'Intel® Core™ i5-4460, 3.20GHz or AMD FX™-6300',
            'minimumStorage' => '48 GB available space',
            'recommendedOS' => 'WINDOWS® 7, 8, 8.1, 10 (64-bit required)',
            'recommendedMemory' => '8 GB RAM',
            'recommendedGraphic' => 'NVIDIA® GeForce® GTX 1060 (VRAM 3GB) or AMD Radeon™ RX 570 (VRAM 4GB)',
            'recommendedProcessor' => 'Intel® Core™ i7 3770 3.4GHz or Intel® Core™ i3 8350 4GHz or AMD Ryzen™ 5 1500X',
            'recommendedStorage' => '48 GB available space',
            'game' => 'https://store.steampowered.com/app/582010/Monster_Hunter_World/',
            'image' => 'game-images/ghhLeBjaZwy516D2QRij4jQcRTYRZu8GO2dR1NRf.png',
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            // 'excerpt' => Str::limit('A game about Seal Online Blade Of Destiny', 110, '...'),
            'excerpt' => 'Battle gigantic monsters in epic locales.As a hunter, you\'ll take on quests to hunt monsters in a vari...',
        ]);

        DB::table('games')->insert([
            'member_id' => 1,
            'title' => 'Tiny Tina\'s Wonderlands',
            'category' => 'Adventure',
            'platform' => 'iOS',
            'description' => '<div>Party up with friends in cross-platform multiplayer!<br><br>Embark on an epic adventure full of whimsy, wonder, and high-powered weaponry! Bullets, magic, and broadswords collide across this chaotic fantasy world brought to life by the unpredictable Tiny Tina.<br>Roll your own multiclass hero and loot, shoot, slash, and cast your way through outlandish monsters and loot-filled dungeons on a quest to stop the tyrannical Dragon Lord. Everyone\'s welcome, so join the party, throw on your adventuring boots, and be Chaotic Great!</div><div><strong><br>AN UNPREDICTABLE FANTASY WORLD</strong></div><div>Tiny Tina is your disorderly guide through an extraordinary tabletop realm where rules rarely apply. Explore a vast overworld spanning majestic cities, dank mushroom forests, foreboding fortresses, and more!</div><div><br><strong>GUNS, SPELLS, AND MORE</strong></div><div>Blast baddies with powerful guns and devastating spells in frenetic first-person battles. Use your firepower to vanquish legions of enemies, including smack-talking skeletons, land-roaming sharks, and colossal bosses. Then delve deeper into dangerous dungeons for a shot at epic loot!</div><div><strong><br>PARTY UP TO DEFEAT EVIL</strong></div><div>Joining you at the table are headstrong captain Valentine and rule-obsessed robot Frette. During your quest to defeat the Dragon Lord, you\'ll meet a cast of lovable misfits like a lute-wielding Bardbarian and your very own Fairy Punchfather.</div><div><br><strong>PERSONALIZE YOUR HERO</strong></div><div>Create the perfect hero with deep customization, including a multiclass system that lets you mix and match six unique character skill trees, all with their own awesome abilities. Level up, refine your build, expand your arsenal, and become the ultimate adventurer.</div><div><br><strong>BAND TOGETHER IN CHAOTIC CO-OP</strong></div><div>Enjoy the story solo or start a party with up to three friends in seamless online multiplayer. Share the spoils or rush to get the shiniest loot—how you play is up to you!</div>',
            'minimumOS' => 'Windows 10 (latest service pack)',
            'minimumMemory' => '6 GB RAM',
            'minimumGraphic' => 'AMD Radeon RX470 (NVIDIA GeForce GTX 960 4GB)',
            'minimumProcessor' => 'AMD FX-8350 (Intel i5-3570)',
            'minimumStorage' => '75 GB available space',
            'recommendedOS' => 'Windows 10 (latest service pack)',
            'recommendedMemory' => '16 GB RAM',
            'recommendedGraphic' => 'AMD Radeon™ RX 590 8GB (NVIDIA GeForce GTX 1060 6GB)',
            'recommendedProcessor' => 'Intel® Core™ i7 3770 3.4GHz or Intel® Core™ i3 8350 4GHz or AMD Ryzen™ 5 1500X',
            'recommendedStorage' => '75 GB available space',
            'game' => 'https://store.steampowered.com/app/1286680/Tiny_Tinas_Wonderlands/',
            'image' => 'game-images/4pBkhCnuJwmfeNFeOFqMghNYrpt70kW2ymiLc4zc.jpg',
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            // 'excerpt' => Str::limit('A game about Seal Online Blade Of Destiny', 110, '...'),
            'excerpt' => 'Party up with friends in cross-platform multiplayer!Embark on an epic adventure full of whimsy, wonder, and hi...',
        ]);

        DB::table('games')->insert([
            'member_id' => 1,
            'title' => 'Stardew Valley',
            'category' => 'Simulation',
            'platform' => 'iOS',
            'description' => '<div>You\'ve inherited your grandfather\'s old farm plot in Stardew Valley. Armed with hand-me-down tools and a few coins, you set out to begin your new life. Can you learn to live off the land and turn these overgrown fields into a thriving home? It won\'t be easy. Ever since Joja Corporation came to town, the old ways of life have all but disappeared. The community center, once the town\'s most vibrant hub of activity, now lies in shambles. But the valley seems full of opportunity. With a little dedication, you might just be the one to restore Stardew Valley to greatness!<br><br><strong>Features</strong></div><ul><li><strong>Turn your overgrown field into a lively farm! </strong>Raise animals, grow crops, start an orchard, craft useful machines, and more! You\'ll have plenty of space to create the farm of your dreams.<br><br></li><li><strong>4 Player Farming!</strong> Invite 1-3 players to join you in the valley online! Players can work together to build a thriving farm, share resources, and improve the local community. As more hands are better than one, players have the option to scale profit margin on produce sold for a more challenging experience.<br><br></li><li><strong>Improve your skills over time. </strong>As you make your way from a struggling greenhorn to a master farmer, you\'ll level up in 5 different areas: farming, mining, combat, fishing, and foraging. As you progress, you\'ll learn new cooking and crafting recipes, unlock new areas to explore, and customize your skills by choosing from a variety of professions.<br><br></li><li><strong>Become part of the local community. </strong>With over 30 unique characters living in Stardew Valley, you won\'t have a problem finding new friends! Each person has their own daily schedule, birthday, unique mini-cutscenes, and new things to say throughout the week and year. As you make friends with them, they will open up to you, ask you for help with their personal troubles, or tell you their secrets! Take part in seasonal festivals such as the luau, haunted maze, and feast of the winter star.<br><br></li><li><strong>Explore a vast, mysterious cave. </strong>As you travel deeper underground, you\'ll encounter new and dangerous monsters, powerful weapons, new environments, valuable gemstones, raw materials for crafting and upgrading tools, and mysteries to be uncovered.<br><br></li><li><strong>Breathe new life into the valley.</strong> Since JojaMart opened, the old way of life in Stardew Valley has changed. Much of the town\'s infrastructure has fallen into disrepair. Help restore Stardew Valley to it\'s former glory by repairing the old community center, or take the alternate route and join forces with Joja Corporation.<br><br></li><li><strong>Court and marry a partner to share your life on the farm with. </strong>There are 12 available bachelors and bachelorettes to woo, each with unique character progression cutscenes. Once married, your partner will live on the farm with you. Who knows, maybe you\'ll have kids and start a family?<br><br></li><li><strong>Spend a relaxing afternoon at one of the local fishing spots. </strong>The waters are teeming with seasonal varieties of delicious fish. Craft bait, bobbers, and crab pots to help you in your journey toward catching every fish and becoming a local legend!<br><br></li><li><strong>Donate artifacts and minerals to the local museum.</strong><br><br></li><li><strong>Cook delicious meals and craft useful items to help you out. </strong>With over 100 cooking and crafting recipes, you\'ll have a wide variety of items to create. Some dishes you cook will even give you temporary boosts to skills, running speed, or combat prowess. Craft useful objects like scarecrows, oil makers, furnaces, or even the rare and expensive crystalarium.<br><br></li><li><strong>Customize the appearance of your character and house. </strong>With hundreds of decorative items to choose from, you\'ll have no trouble creating the home of your dreams!<br><br></li><li><strong>Xbox controller support (with rumble)! (Keyboard still required for text input)</strong><br><br></li><li><strong>Over two hours of original music.</strong></li></ul>',
            'minimumOS' => 'Windows Vista or greater',
            'minimumMemory' => '2 GB RAM',
            'minimumGraphic' => '256 MB video memory, shader model 3.0+',
            'minimumProcessor' => '2 Ghz',
            'minimumStorage' => '500 MB available space',
            'recommendedOS' => 'Windows Vista or greater',
            'recommendedMemory' => '2 GB RAM',
            'recommendedGraphic' => '256 MB video memory, shader model 3.0+',
            'recommendedProcessor' => '2 Ghz',
            'recommendedStorage' => '500 MB available space',
            'game' => 'https://store.steampowered.com/app/413150/Stardew_Valley/',
            'image' => 'game-images/gDHV4tks5zNST8PJMpmkwnmD8hDtUZKQsoPcAgkH.png',
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            // 'excerpt' => Str::limit('A game about Seal Online Blade Of Destiny', 110, '...'),
            'excerpt' => 'You\'ve inherited your grandfather\'s old farm plot in Stardew Valley. Armed with hand-me-down tools and a few c...',
        ]);

        DB::table('games')->insert([
            'member_id' => 1,
            'title' => 'It Takes Two',
            'category' => 'Puzzle',
            'platform' => 'Windows',
            'description' => '<div>Embark on the craziest journey of your life in It Takes Two, a genre-bending platform adventure created purely for co-op. Invite a friend to join for free with Friend’s Pass and work together across a huge variety of gleefully disruptive gameplay challenges. Play as the clashing couple Cody and May, two humans turned into dolls by a magic spell. Together, trapped in a fantastical world where the unpredictable hides around every corner, they are reluctantly challenged with saving their fractured relationship.<br><br>Master unique and connected character abilities in every new level. Help each other across an abundance of unexpected obstacles and laugh-out-loud moments. Kick gangster squirrels’ furry tails, pilot a pair of underpants, DJ a buzzing night club, and bobsleigh through a magical snow globe. Embrace a heartfelt and hilarious story where narrative and gameplay weave into a uniquely metaphorical experience.<br><br>It Takes Two is developed by the award-winning studio Hazelight, the industry leader of cooperative play. They’re about to take you on a wild and wondrous ride where only one thing is for certain: we’re better together.</div><div><strong><br>KEY FEATURES</strong></div><ul><li><strong>Pure co-op perfection</strong> — Invite a friend to join for free with Remote Play Together**, and experience a thrilling adventure built purely for two. Choose from couch or online co-op with split-screen play, and face ever-changing challenges where working together is the only way forward.<br><br></li><li><strong>Gleefully disruptive gameplay</strong> — From rampaging vacuum cleaners to suave love gurus, you never know what you’ll be up against next. Filled with genre-bending challenges and new character abilities to master in every level, experience a metaphorical merging of gameplay and narrative that pushes the boundaries of interactive storytelling.<br><br></li><li><strong>A universal tale of relationships</strong> — Discover a touching and heartfelt story of the challenges in getting along. Help Cody and May learn how to overcome their differences. Meet a diverse cast of strange and endearing characters. Join forces and go on an adventure you’ll treasure — together!</li></ul><div><strong>ABOUT HAZELIGHT</strong><br>Hazelight is an award-winning independent game development studio based in Stockholm, Sweden. Founded in 2014 by Josef Fares (film director and creator of the award-winning game Brothers: A Tale of Two Sons), Hazelight is committed to pushing the creative boundaries of what is possible in games. In 2018, Hazelight released the BAFTA award-winning A Way Out — the first-ever co-op only, third-person action-adventure — as part of the EA Originals program.<br><strong><br>ABOUT EA ORIGINALS</strong><br>EA Originals helps shine a light on some of the most passionate, independent, and talented game studios across the globe. Discover innovative and unforgettable gaming experiences from highly creative game makers who love to enchant and inspire.</div>',
            'minimumOS' => 'Windows 8.1 64-bit or Windows 10 64-bit',
            'minimumMemory' => '8 GB RAM',
            'minimumGraphic' => 'Nvidia GeForce GTX 660 or AMD R7 260x',
            'minimumProcessor' => 'Intel Core i3-2100T or AMD FX 6100',
            'minimumStorage' => '50 GB available space',
            'recommendedOS' => 'Windows 8.1 64-bit or Windows 10 64-bit',
            'recommendedMemory' => '16 GB RAM',
            'recommendedGraphic' => 'Nvidia GeForce GTX 980 or AMD R9 290X',
            'recommendedProcessor' => 'Intel Core i5 3570K or AMD Ryzen 3 1300x',
            'recommendedStorage' => '50 GB available space',
            'game' => 'https://store.steampowered.com/app/1426210/It_Takes_Two/',
            'image' => 'game-images/A5EyFOAuS4s8bq9vGgZjGZmUPg9xAwez0qEe0JNo.jpg',
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            // 'excerpt' => Str::limit('A game about Seal Online Blade Of Destiny', 110, '...'),
            'excerpt' => 'Embark on the craziest journey of your life in It Takes Two, a genre-bending platform adventure created purely...',
        ]);
    }

    
}
