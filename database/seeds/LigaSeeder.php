<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ligas')->insert([
            'name' => 'PC',
            'gambar' => 'pc.png',
        ]);

        DB::table('ligas')->insert([
            'name' => 'PLAYSTATION',
            'gambar' => 'ps.png',
        ]);

        DB::table('ligas')->insert([
            'name' => 'XBOX',
            'gambar' => 'xbox.png',
        ]);
    }
}
