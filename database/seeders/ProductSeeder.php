<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=>'Fritteuse',
                'price'=>'34343',
                'description'=>'Fritteuse',
                'category'=>'Fritteuse',
                'image'=>'https://m.media-amazon.com/images/I/817H-JwTHDL._AC_SX466_.jpg'
            ],
            [
                'name'=>'Fritteuse',
                'price'=>'34343',
                'description'=>'Fritteuse',
                'category'=>'Fritteuse',
                'image'=>'https://m.media-amazon.com/images/I/61veczcNSRL.__AC_SX300_SY300_QL70_ML2_.jpg'
            ],
            [
                'name'=>'Fritteuse',
                'price'=>'34343',
                'description'=>'Fritteuse',
                'category'=>'Fritteuse',
                'image'=>'https://m.media-amazon.com/images/I/5106tQEgdnL._AC_SX679_.jpg'
            ],
            [
                'name'=>'Fritteuse',
                'price'=>'34343',
                'description'=>'Fritteuse',
                'category'=>'Fritteuse',
                'image'=>'https://m.media-amazon.com/images/I/510p89lWBPS._AC_SY679_.jpg'
            ],
            [
                'name'=>'Fritteuse',
                'price'=>'34343',
                'description'=>'Fritteuse',
                'category'=>'Fritteuse',
                'image'=>'https://m.media-amazon.com/images/I/51AWkfO17nL._AC_SX466_.jpg'
            ],
            [
                'name'=>'Fritteuse',
                'price'=>'34343',
                'description'=>'Fritteuse',
                'category'=>'Fritteuse',
                'image'=>'https://m.media-amazon.com/images/I/51r+KfalSEL._AC_SX679_.jpg'
            ],
            [
                'name'=>'Fritteuse',
                'price'=>'34343',
                'description'=>'Fritteuse',
                'category'=>'Fritteuse',
                'image'=>'https://m.media-amazon.com/images/I/41gj-pcQXlS._AC_SX679_.jpg'
            ],
            [
                'name'=>'Fritteuse',
                'price'=>'34343',
                'description'=>'Fritteuse',
                'category'=>'Fritteuse',
                'image'=>'https://m.media-amazon.com/images/I/41nCW6K7isL._AC_SX466_.jpg'
            ],
            [
                'name'=>'Fritteuse',
                'price'=>'34343',
                'description'=>'Fritteuse',
                'category'=>'Fritteuse',
                'image'=>'https://m.media-amazon.com/images/I/415NP67vK7L._AC_.jpg'
            ],
            [
                'name'=>'Fritteuse',
                'price'=>'34343',
                'description'=>'Fritteuse',
                'category'=>'Fritteuse',
                'image'=>'https://m.media-amazon.com/images/I/61GF2T+PfSL._AC_SY679_.jpg'
            ],
            [
                'name'=>'Fritteuse',
                'price'=>'34343',
                'description'=>'Fritteuse',
                'category'=>'Fritteuse',
                'image'=>'https://m.media-amazon.com/images/I/71Vm8TioY-L._AC_SX679_.jpg'
            ],
        ]);
    }
}
