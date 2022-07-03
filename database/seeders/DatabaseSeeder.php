<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new AdminSeeder;
        $member = new MemberSeeder;
        $forum = new ForumSeeder;
        $comment = new CommentSeeder;
        $news = new NewsSeeder;
        $game = new GameSeeder;
       
        // $admin->run();
        // $member->run();
        // $forum->run();
        // $comment->run();
        $news->run();
        // $game->run();
    }
}
