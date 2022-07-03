<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'userType' => 'member',
            'username' => 'pinatz',
            'email' => 'pinatz@email.com',
            'password' => bcrypt('12341234'),
            'image' => '',
            'donationCode' => '',
            'developerAlias' => 'ThePinatz',
            'image' => "profile-images/MgvF66cegaSfMO7EOvvLY45TyS9keLc2hLGD6aww.jpg"
        ]);
    }
}
