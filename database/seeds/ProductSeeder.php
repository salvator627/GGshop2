<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name' => 'The Last Of Us Part II',
            'liga_id' => 2,
            'gambar' => 'tlou2.png',
            'size' => '60GB',
            'harga' => '300000'
        ]);

        DB::table('products')->insert([
        	'name' => 'Red Dead Redemption 2',
            'liga_id' => 1,
            'gambar' => 'rdr2.png',
            'size' => '150GB',
            'harga' => '600000'
        ]);

        DB::table('products')->insert([
        	'name' => 'Death Stranding',
            'liga_id' => 2,
            'gambar' => 'death.png',
            'size' => '50GB',
            'harga' => '800000'
        ]);

        DB::table('products')->insert([
        	'name' => 'Forza Horizon 4',
            'liga_id' => 3,
            'gambar' => 'fh4.png',
            'size' => '70GB',
            'harga' => '300000'
        ]);

        DB::table('products')->insert([
        	'name' => 'The Last Of Us Remake',
            'liga_id' => 2,
            'gambar' => 'tlou1.png',
            'size' => '60GB',
            'harga' => '900000'
        ]);

        DB::table('products')->insert([
        	'name' => 'Batman Arkham Knight',
            'liga_id' => 1,
            'gambar' => 'bak.png',
            'size' => '60GB',
            'harga' => '200000'
        ]);

        DB::table('products')->insert([
            'name' => 'Cyberpunk 2077',
            'liga_id' => 1,
            'gambar' => 'cyber.png',
            'size' => '70GB',
            'harga' => '600000'
        ]);

        DB::table('products')->insert([
        	'name' => 'Mortal Kombat 11',
            'liga_id' => 1,
            'gambar' => 'mk11.png',
            'size' => '90GB',
            'harga' => '800000'
        ]);

        DB::table('products')->insert([
        	'name' => 'Forza Horizon 5',
            'liga_id' => 3,
            'gambar' => 'fh5.png',
            'size' => '150GB',
            'harga' => '600000'
        ]);

        DB::table('products')->insert([
            'name' => 'Halo Infinite',
            'liga_id' => 3,
            'gambar' => 'halo.png',
            'size' => '60GB',
            'harga' => '100000'
        ]);

        DB::table('products')->insert([
        	'name' => 'God Of War',
            'liga_id' => 2,
            'gambar' => 'gow.png',
            'size' => '90GB',
            'harga' => '900000'
        ]);

        DB::table('products')->insert([
        	'name' => 'Marvel SpiderMan',
            'liga_id' => 2,
            'gambar' => 'spiderman.png',
            'size' => '50GB',
            'harga' => '800000'
        ]);
    }
}
