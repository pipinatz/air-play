<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'admin_id' => 1,
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            'title' => 'Discover a New Reserve in theHunter: Call of the Wild, Available Now on Epic Games Store',
            'description' => '<div>Howdy, Hunters! We’re pleased to share that <a href="https://store.epicgames.com/en-US/p/thehunter-call-of-the-wild--revontuli-coast">Revontuli Coast</a>, the all-new reserve for our immersive hunting game theHunter: Call of the Wild, is available now on Epic Games Store. This reserve brings new species to hunt, unique areas to explore, features and improvements, and much more.&nbsp;<br><br><strong>Welcome to Finland<br></strong><br></div><div>With our two previous reserves being located in North America and Mexico, we wanted to expand the hunt to a different part of the world. Combined with the new and improved waterfowl system that’s being introduced with this release, Finland felt like a natural choice. When you’re exploring the reserve, you’ll notice that there’s plenty of interconnected islands and coastal shores. This isn’t only because Revontuli Coast is based on Finnish geography and topography, but also because we received feedback from players that our previous reserve, Mississippi Acres Preserve, lacked enough water-crossing opportunities. We’re happy to share that this has been fixed now. Circling back on exploration, there’s plenty of landmarks and points of interest to find in Revontuli Coast, such as a huge balancing rock and a wondrous gorge. Even when you’re not hunting, there’s always something interesting to discover.<br><br><br><strong>Diverse animal species<br></strong><br></div><div>Revontuli Coast is home to 19 species – the largest selection we’ve ever featured in a reserve. There’s too many to mention them all by name in this article, but if you’re a bird hunting enthusiast, you’ll be thrilled to know that species like the Capercaillie, Black Grouse, and Rock Ptarmigan roam here. Just set up your new water layout blind, place a couple of decoys nearby, and hunt waterfowl like never before. If you prefer to hunt animals horizontally rather than vertically – don’t worry; there’s plenty of ground-based species to go round, such as the Raccoon Dog, Mountain Hare, Brown Bear, and Moose.&nbsp;<br><br><strong>Waterfowl rework<br></strong><br></div><div>Alongside the release of Revontuli Coast, we’re thrilled to introduce for free a reworked waterfowl system. This has been a highly requested update from our community, and greatly improves the waterfowl hunting experience. For example, all waterfowl have now been ‘sped-up’, providing a bigger challenge for players. They’ll also be more distinct, including flight altitude, approach vector, flee behavior, and formations. There’s a lot more changes – too many to cover here – so make sure to tune in to our socials for all the latest news.&nbsp;<br><br></div>',
            'image' => 'news-images/zJgvNC1ZtA6Bu2kKIE6r5IjUsDfJ0qNT0tUsrjJp.jpg'
        ]);

        DB::table('news')->insert([
            'admin_id' => 1,
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            'title' => 'True Fear: Forsaken Souls Part 1 is now available on Epic Games Store!',
            'description' => '<div>When we founded Goblinz 20+ years ago, our dream was to make games we love as players. However, lacking funds or contacts we quickly got stuck making what was known as “casual games”. Finally, 10 years ago, as the money was running dry and, realizing that this was probably going to be our last project, we decided to make it count - finally make something that we ourselves would enjoy playing! I borrowed from family, sold my car and we finally presented True Fear to our casual publisher.<br><br>The reaction was far from good! We were told that casual gamers do not like “complex stories” or horror. Testers were heard screaming while playing the game and that was considered a bad thing. On the eve of the launch several producers gathered around me and asked me whether we wanted to make a “good game” or a “game that sells”. Armed with all the confidence of the captain of a sinking ship, I replied “both” and they proceeded to explain to me how this was “not an option”. What they didn’t know was that at that point we had no choice - we were basically bankrupt.<br><br>24 hours later, with the first numbers coming in, the same people were asking me “how did we do it” - the game went on to be one of the best selling HOPAs to date.<br><br>Now, 10 years and over 120 thousand positive reviews later I can confidently say - if you enjoy horror and like a compelling story, then give our free demo a try! Maybe the game won’t be for you, but maybe, like many of those reviewers, you’ll be surprised to find a compelling horror game where you least expected it!<br><br>We take pride in our independence and take the time we deem necessary on each creation, releasing a game every 3-5 years. We also make sure that our games stay updated - whether it would be the support for the wider new monitors or following feedback from players. For the XBOX release we have taken particular care to adapt the controls to the gamepad and compiled all the bonus materials from previous releases!</div>',
            'image' => 'news-images/wtBTsKXf3ZSQ7oE2PtdoGAEC7Ofc7uLWU7qh1QcJ.png'
        ]);

        DB::table('news')->insert([
            'admin_id' => 1,
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            'title' => 'Jurassic World Evolution 2: Dominion Biosyn Expansion unveiled',
            'description' => '<div>We’re so excited to introduce <a href="https://store.epicgames.com/p/jurassic-world-evolution-2">Jurassic World Evolution 2</a>’s biggest DLC yet. Jurassic World Evolution 2: Dominion Biosyn Expansion brings a range of new prehistoric species and game mechanics to the ground-breaking management simulation, including a brand new campaign inspired by events from Jurassic World Dominion, an immersive new Chaos Theory level, awe-inspiring new dinosaurs complete with highly requested feathered species, and more.&nbsp;<br><br>Immerse yourself in a thrilling new campaign expanding on the Jurassic World Dominion story. Construct the Biosyn Genetics Research Compound using a brand new array of buildings inspired by the film. Send scientists to retrieve amber-encased DNA, synthesise and incubate stunning new species, and observe their diverse behaviours. Team up with iconic characters from across the franchise as the campaign unfolds, including Lewis Dodgson (voiced by Campbell Scott), Dr. Alan Grant (voiced by Sam Neill), Dr. Ellie Sattler and Claire Dearing (voiced by Bryce Dallas Howard).&nbsp;<br>We’ve also added a bold new Chaos Theory level inspired by the epic events of Jurassic World Dominion. Head to snowy Sierra Nevada and manage your very own dinosaur facility while using new dinosaur-wrangling mechanics to corral herds without need to tranquilise them, then keep them safe with new safety measures such as floodlights and watchtowers.<br><br>In addition, grow your parks even more with four spectacular new prehistoric species. These include&nbsp; never-before-seen feathered dinosaurs such as the Therizinosaurus, a fiercely territorial foliage-grazer, and Pyroraptor, a formidable carnivore with magnificent plumage. Plus, see new versions of existing dinosaurs with six stunning new skins and two new variants, including 3 new film specific skins for the Parasaurolophus.<br><br>You can experience all of this for yourself when Jurassic World Evolution 2: Dominion Biosyn Expansion launches 14 June on Epic Game Store. We can’t wait for you to play our biggest Jurassic World Evolution 2 DLC yet and discover everything it has to offer.</div>',
            'image' => 'news-images/RH886FR6Dlf31DELCnwSDzDhWn4ckwBDdfMMkrix.png'
        ]);

        DB::table('news')->insert([
            'admin_id' => 1,
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            'title' => 'The Cycle: Frontier Pre-Season One starts now',
            'description' => '<div><strong>Fortuna III waits for you!<br></strong><br></div><div>Grab your gear, Prospector, and drop down onto the beautiful, but dangerous planet, Fortuna III.&nbsp; Map instances stay open for several hours, so Prospectors can drop to the planet\'s surface at any time as long as the Cycle, a radioactive storm, is not raging.<br><br>Explore the planet alone or in a squad, but never forget – Fortuna III is a treacherous place full of dangerous creatures and ruthless Prospectors.&nbsp;<br>Were those footsteps you just heard from the local fauna, a Prospector, a duo, or even a trio of Prospectors? Maybe someone friendly that you can talk to via proximity voice... there is only one way to find out, keep in mind:<br><br>Fortuna favors the bold!<br><br><strong>Prospect Station, your new home!</strong><br>After a run, no matter if successful or not, you can buy new gear from one of the three factions, craft new gear, take on new jobs and improve your Player Quarter. Make sure to progress in the campaigns of the factions, so you can get access to the dungeon and to get the best loot possible.&nbsp;<br><br>Get rich or die trying.<br><br>See you on the surface, Prospectors!<br><br><a href="https://twitter.com/TheCycleGame">Official The Cycle: Frontier Twitter</a><br><a href="https://discord.com/invite/thecycle">Official The Cycle: Frontier Discord Community</a><br><a href="https://m.youtube.com/channel/UCK5GtM7cxNlPcK3ebUx1SHg">Official The Cycle: Frontier Youtube</a></div>',
            'image' => 'news-images/OyrUcV3tqXjqqEsSwkhfsc05ECuOYrkzrKpU0jZH.png'
        ]);

        DB::table('news')->insert([
            'admin_id' => 1,
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            'title' => 'Kwalee\'s Future Games Show Reveals',
            'description' => '<div><strong>Do you know what’s better than one new game announcement?</strong><br><br>Two new game announcements, of course! Coming up, we’ll be making the debut announcements for two of our upcoming games, along with updates on two of our releases that will be coming to the Epic Games Store in 2022.<br><br><a href="https://store.epicgames.com/p/wildmender-29ca3c">Are you ready to go wild for Wildmender</a>? Our first upcoming title, made by veteran developers Muse Games, will challenge you to restore a dying world.Explore the landscape, revive withering plant life, cultivate your garden, and build a better world alone or with friends in 4-player online co-op. Unearth the past to protect the future. Coming in 2023.<br><br>Now that we’ve got a good rhythm going, let’s talk about our second announcement, <a href="https://store.epicgames.com/p/robobeat-5f084b">our rogue-lite rhythm shooter Robobeat!</a>&nbsp; You better keep your trigger finger on the pulse, because you’ll have to shoot to the beat if you want to maximise your damage. Wall run, grapple hook, slide, and bunny hop your way through the haphazard mansion of a crazed robot-showman. Coming in 2022.<br><br>We’re excited to share with you that <a href="https://store.epicgames.com/p/scathe-ca258f">Scathe, our blood-soaked bullet hell FPS</a>, now has an official release date! Scathe will be coming to the Epic Games Store on 31st of August 2022. Not to mention, we’ve got a surprise that is sure to cast a spell on you! Check out our Release Date Reveal trailer for a sneak peek at our new dark powers.<br><br>Lastly, it’s time to cut this announcement down to size with our <a href="https://store.epicgames.com/p/die-by-the-blade-0d29ad">one-hit-kill fighter Die by the Blade</a>. Dive into a samurai-punk world, where you must choose from a range of traditional Japanese weapons to determine your moveset, parry your opponents’ blows with lightning speed, and master the art of one-hit kills!<br><br>Coming 2022....</div>',
            'image' => 'news-images/zDy81Qw77LAQ8jtcugF0hlKEIQYr8enuzOnckcXB.png'
        ]);

        DB::table('news')->insert([
            'admin_id' => 1,
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            'title' => 'The dragon hunts have begun in Neverwinter: Dragonslayer!',
            'description' => '<div>While Valindra Showdomantle failed at completing the full Scaleblight Mythal, her attempt released a pulse of malevolent energy throughout the Sword Coast that awakened dragonsight in countless dragons. Tormented by echoes of themselves, the children of Tiamat have begun attacking Faerûn and its inhabitants. It is up to brave adventurers like yourself to stop this draconic threat.<br><br><a href="https://store.epicgames.com/p/neverwinter"><em>Neverwinter: Dragonslayer</em></a> introduces Dragon Hunts, a new queue system where players will confront the dragon threat. With the assistance of the infamous dragon hunter Smerdiuk Dragonbane and his crew, players can enter the different chromatic dragon lairs and fight young, adult, or ancient dragons. Along with the new solo and group content, this new system also includes mechanics to increase both the dangers and the rewards through the use of Dragon Hunt Modifiers.<br><br>Additional group content can be found in reworked Master and Standard versions of the Tiamat trial and the Standard mode of Crown of Keldegonn. This new module also includes changes to the lockbox rewards structure and the Epic Adventure conversion of the prior Tyranny of Dragons Campaign. With updated models and powers, the dragons of the Sword Coast are well prepared for your arrival. Are you?<br><br></div><div>Celebrate the launch of <em>Neverwinter: Dragonslayer</em> by claiming the Free Epic Lightning Pack available starting today until June 21. This pack includes:<br><br></div><div>• Title: Blue Dragon’s Bane<br><br></div><div>• Elemental Cloak: Lightning<br><br></div><div>• 1 Stone of Health<br><br></div><div>• 5 Scrolls of Life<br>&nbsp;</div><div>You will need these supplies to face the awakened dragon threat and be ready to join the hunt!<br><br></div>',
            'image' => 'news-images/eOCgevwHzp8cBwLSLepN7rIk2hmPiaQK9ghVHuYj.jpg'
        ]);

        DB::table('news')->insert([
            'admin_id' => 1,
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
            'title' => 'Genshin Impact Version 2.7 “Hidden Dreams in the Depths” Arrives on May 31',
            'description' => '<div>Hello Travelers! Today, we are excited to share that Genshin Impact\'s Version 2.7 "Hidden Dreams in the Depths" is now available on the Epic Games Store. As you continue your exploration of The Chasm, you will join an interesting crew consisting of Yanfei and Itto, as well as new characters Yelan and Kuki Shinobu, to discover more about the history and secrets of Liyue. Meanwhile, the Arataki Gang also invites you to the Almighty Arataki Great and Glorious Drumalong Festival and the latest season of rhythm game!<br><br><strong>Trapped Deep Inside The Chasm<br></strong><br></div><div>It seems that The Chasm seals away not only clues to Khaenri\'ah and the Traveler twins, but also the history and secrets of Liyue, including how the people fought against monsters 500 years ago. For a long time, Yelan has been watching over The Chasm, trying to find out what happened back then, which may be closely related to her origin. In addition, the yakshas also seem to share a deep connection with what happened in the past.<br><br>In the new event "Perilous Trail," you will start a new Archon Quest Interlude Chapter featuring a diverse cast of characters inside The Chasm. While Yelan, Yanfei, Itto, and Shinobu are stranded in the depths, danger also looms ahead for the "Conqueror of Demons," Xiao, who is conducting his own investigation. Survive the crisis together, and follow Xiao\'s steps to uncover the history buried inside The Chasm.<br><br>As the story progresses, a new combat challenge "Realms of Guile and War" will be unlocked along with the Perilous Trail event, putting both your combat skills and party-building strategy to the test. In this new game mode, you will be facing several rounds of combat in four different domains, and each domain has its own rule to rearrange your party after every round of combat. For instance, the Direcliff Court Domain allows only one member of your current party to continue in the next round of combat, while in the Kaleidoscope Cage Domain, two current members will be banned randomly in later fights. The challenge can be daunting, so we also prepared multiple Stratagem buffs and Trial Characters for you to choose from. Bountiful rewards, including the new 4-star bow "Fading Twilight" also await in the event shop.<br><br>Besides, our old acquaintance Hosseini the Sumeru scholar is asking for help again to settle another crisis in which dark mud-like substance is spewing forth from the depths. In the "A Muddy Bizarre Adventure," you need to use your Lumenstone Adjuvant and the Pursina\'s Spike placed by the scholar to clear the mud, repel monsters, and complete different challenge objectives such as escorting a hot air balloon to its destination or defeating certain monsters in a limited time.<br><br><strong>Meet Yelan and Kuki Shinobu<br></strong><br></div><div>Following the debut of Yelan and Kuki Shinobu in The Chasm, you will also have the opportunity to recruit them during Version 2.7. While Yelan and Shinobu have very distinct backgrounds and stories, they\'re both extremely capable and reliable characters to their friends and allies.<br><br></div><div>Yelan is the mysterious owner of Liyue\'s Yanshang Teahouse, but her true identity is hard to explain in a few words. Known as "a person with many faces," Yelan appears in various guises, pulls strings behind events, and disappears before anyone noticed. Therefore, she is also an excellent special intelligence officer, helping Ningguang to protect Liyue. Yelan enjoys living life on the edge, and her activities have taken her across the other nations of Teyvat, and even to the Abyss. If you\'re interested in how this master of intelligence and disguise operates in tough scenarios to uncover the truth, don\'t forget to check out her Story Quest "Umbrabilis Orchis Chapter."<br><br></div><div>In combat, our new 5-star playable character Yelan favors the bow, and is capable of being a Hydro DPS that combines rapid attacks with agile mobility. After a short time out of combat, Yelan will enter a "Breakthrough" state, which will cause her next Charged Aimed Shot to have decreased charge time, and once charged, she can fire a "Breakthrough Barb" that will deal AoE Hydro DMG. With her Elemental Skill "Lingering Lifeline," Yelan can move swiftly, mark her opponents, and deal Hydro DMG to marked targets once her rapid movement ends. Yelan also has a fixed chance to reset her Breakthrough state, based on the number of opponents marked. Her Elemental Burst "Depth-Clarion Dice" deals AoE Hydro DMG and creates a wondrous dice to aid in battle. The dice will follow your active character and initiate a coordinated attack when you unleash a Normal Attack or when Yelan\'s Lifeline explodes and hits opponents. With Yelan\'s Passive Talent "Adapt With Ease," the active character\'s damage increases over time while the Dice is active. What\'s more, Yelan\'s Max HP increases based on the number of Elemental Types that are present in the party.<br><br>While Yelan is protecting Liyue from plots and threats, Kuki Shinobu is busy rescuing the boss and fellow Arataki Gang members from various troublesome and dangerous situations. Born in a family of shrine maidens, Shinobu took a very different path. She has learned a variety of crafts and skills and obtained so many professional certificates that her business card can\'t even list them all. She even studied law in Liyue as a junior alumna of Yanfei. It\'s still unknown how Shinobu ended up being the deputy leader of the Arataki Gang, but thanks to her efforts, this wandering little gang of misfits has become a crew capable of running all kinds of errands and jobs. If you want to spend a day with the Gang and learn more about Shinobu, you must not miss her Hangout Event.<br><br></div><div>As a 4-star Electro sword character in combat, Kuki Shinobu can be a strong support to heal teammates and deal continuous damage from off the battlefield. Shinobu\'s Elemental Skill "Sanctifying Ring" will sacrifice a certain portion of her HP and create a Grass Ring of Sanctification that will heal friendly characters within and deal continuous Electro DMG to surrounding opponents. Shinobu\'s healing and damage will be boosted based on her Elemental Mastery, and her Healing Bonus can be further increased if her HP is down to a certain level. With her Elemental Burst "Gyoei Narukami Kariyama Rite," Shinobu creates a special field in front that deals continuous Electro damage to opponents within.<br><br></div><div>Yelan\'s Event Wish will be available at the start of Version 2.7, coinciding with Xiao\'s rerun. Arataki Itto and Kuki Shinobu will be joining at the later stage of the update.<br><br><strong>Join the Beat With the Arataki Gang<br></strong><br></div><div>As Kuki Shinobu has finished her law studies in Liyue, Arataki Itto and his fellows now invite you to the Almighty Arataki Great and Glorious Drumalong Festival in Inazuma! It\'s time to celebrate Shinobu\'s graduation with a new rhythm game event!<br><br>During this event, you will receive a strange little drum from Itto to play with, and the playstyle is also different from our previous rhythm game to better match the percussion and drum beats. If you manage to unlock all available tunes, you can also enter the Note Editor mode and create your own beatmaps, and share with other players.<br><br></div><div>As you pass by Inazuma, you may also check out the "Core of the Apparatus" event to assist a toy merchant from Fontaine and receive different robotic furnishings that can be placed in the Serenitea Pot. You may also send your robotic furnishings to your friends.<br><br></div>',
            'image' => 'news-images/2UGca1mWDW7V4Nqtz2aLt7QHZk2mOkCTsRrA887z.png'
        ]);

    }
}
