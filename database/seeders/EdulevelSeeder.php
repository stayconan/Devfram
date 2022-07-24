<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EdulevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('edulevels')->insert([
            [
              'name' => 'Lulusan',
              'desc' => 'S1 / D3',
            ],
            [
              'name' => 'Lulusan',
              'desc' => 'SMA / SMK',
            ],
        ]);
    }
}
