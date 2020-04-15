<?php

use Illuminate\Database\Seeder;

class PathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('path')->insert([
            'tag' =>
            rawurlencode('iot.christopherreilly.me:80/industry-classification#industry-classification.industry'),
            'path' => 'iot.christopherreilly.me/industry-classification',
            'query' => '#industry-classification.industry',
            'port' => 80,
        ]);
    }
}
