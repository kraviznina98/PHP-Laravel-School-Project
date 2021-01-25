<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZanrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zanrs')->insert(
            [
                ['naziv' => 'triler'],
                ['naziv' => 'horor'],
                ['naziv' => 'drama'],
                ['naziv' => 'komedija'],
                ['naziv' => 'akcija']
            ]
        );
    }
}
