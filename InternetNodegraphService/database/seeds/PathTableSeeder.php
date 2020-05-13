<?php

use Illuminate\Database\Seeder;
use App\Path;
use App\User;

class PathTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','=','tester@test.loc')->first();
        $homePath = new Path();
        $homePath->path = 'login';
        $homePath->destroy_on = now()->addDays(3650);
        $user->paths()->save($homePath);
    }
}
