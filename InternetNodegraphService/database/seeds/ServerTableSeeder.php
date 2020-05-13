<?php

use Illuminate\Database\Seeder;
use App\Server;
use App\User;

class ServerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','=','tester@test.loc')->first();
        $homeServer = new Server();
        $homeServer->server = 'http://internetnodegraphservice.loc';
        $homeServer->destroy_on = now()->addDays(3650);
        $user->servers()->save($homeServer);

        $other = User::where('email','=','other@ins.me')->first();
        $otherServer = new Server();
        $otherServer->server = 'http://p2.loc';
        $otherServer->destroy_on = now()->addDays(3650);
        $other->servers()->save($otherServer);

        $localServer = new Server();
        $localServer->server = 'http://p1.loc';
        $localServer->destroy_on = now()->addDays(3650);
        $other->servers()->save($localServer);
    }
}
