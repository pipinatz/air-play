<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Stringable;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('admins')->insert([
            'userType' => 'admin',
            'username' => 'Swe4tMemories',
            'email' => 'swe4tmemories@email.com',
            'password' => bcrypt('12341234'),
            'image' => "profile-images/admin-01.png"
        ]);

    }
}
