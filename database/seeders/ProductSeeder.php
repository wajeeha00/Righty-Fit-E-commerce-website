<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'name' => 'White Nike',
                'price' => 5000,
                'description' => 'best quality- soft sneakers- lightweight',
                'category' => 'sneakers',
                'gallery'=>"https://images.pexels.com/photos/12611630/pexels-photo-12611630.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                'name' => 'Red n Black contoversy',
                'price' => 6000,
                'description' => 'classic and best quality soft sneakers',
                'category' => 'sneakers',
                'gallery'=>"https://images.pexels.com/photos/6050911/pexels-photo-6050911.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                'name' => 'Nike Air',
                'price' => 4000,
                'description' => 'best quality soft sneakers',
                'category' => 'sneakers',
                'gallery'=>"https://images.pexels.com/photos/9869141/pexels-photo-9869141.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                'name' => 'Mustard Fever',
                'price' => 6000,
                'description' => 'best quality soft sneakers',
                'category' => 'sneakers',
                'gallery'=>"https://images.pexels.com/photos/12651120/pexels-photo-12651120.jpeg?auto=compress&cs=tinysrgb&w=1600"
            ],
            [
                'name' => 'Neon Splash',
                'price' => 10000,
                'description' => 'best quality for sports',
                'category' => 'sports',
                'gallery'=>"https://images.pexels.com/photos/7188059/pexels-photo-7188059.jpeg?auto=compress&cs=tinysrgb&w=300"
            ],
            [
                'name' => 'Swiss Port',
                'price' => 8000,
                'description' => 'best quality for sports',
                'category' => 'sports',
                'gallery'=>"https://images.pexels.com/photos/8472857/pexels-photo-8472857.jpeg?auto=compress&cs=tinysrgb&w=1600"
            ],
            [
                'name' => 'coffee power',
                'price' => 1500,
                'description' => 'best quality soft shoes',
                'category' => 'casual',
                'gallery'=>"https://images.pexels.com/photos/4663832/pexels-photo-4663832.jpeg?auto=compress&cs=tinysrgb&w=300"
            ],
            [
                'name' => 'Jordan off-white',
                'price' => 6000,
                'description' => 'best quality soft shoes',
                'category' => 'sneakers',
                'gallery'=>"https://images.pexels.com/photos/10077898/pexels-photo-10077898.jpeg?auto=compress&cs=tinysrgb&w=300"
            ],
            [
                'name' => 'Vans off the road',
                'price' => 7000,
                'description' => 'best quality soft sneakers',
                'category' => 'sneakers',
                'gallery'=>"https://images.pexels.com/photos/2812474/pexels-photo-2812474.jpeg?auto=compress&cs=tinysrgb&w=300"
            ],
            [
                'name' => 'sky light',
                'price' => 5000,
                'description' => 'best quality soft sneakers',
                'category' => 'sneakers',
                'gallery'=>"https://images.pexels.com/photos/7543638/pexels-photo-7543638.jpeg?auto=compress&cs=tinysrgb&w=300"
            ]
        ]);
    }
}
