<?php

use Illuminate\Database\Seeder;
use App\Query;
use App\User;

class QueryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','=','proxy@ins.me')->first();
        $homeQuery = new Query();
        $homeQuery->query = '?query';
        $homeQuery->destroy_on = now()->addDays(3650);
        $user->queries()->save($homeQuery);
    }
}
