<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homeUser = new User();
        $homeUser->name = 'proxy';
        $homeUser->email = 'proxy@ins.me';
        $homeUser->password = hash('sha256', 'superduper');
        $homeUser->save();

        $otherUser = new User();
        $otherUser->name = 'other';
        $otherUser->email = 'other@ins.me';
        $otherUser->password = hash('sha256', 'superduper');
        $otherUser->save();
    }
}
