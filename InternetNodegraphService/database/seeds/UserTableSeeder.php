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
        $homeUser->name = 'test';
        $homeUser->email = 'tester@test.loc';
        $homeUser->password = bcrypt($password='superduper');
        $homeUser->save();

        $otherUser = new User();
        $otherUser->name = 'other';
        $otherUser->email = 'other@ins.me';
        $otherUser->password = bcrypt($password='superduper');
        $otherUser->save();
    }
}
