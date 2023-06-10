<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class aboutus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aboutus')->insert([
            'number' => '12345',
            'branch'=>'Righty Fit',
            'fb'=>'https://www.facebook.com/',
            'insta'=>'https://www.instagram.com/',
            'twitter'=>'https://twitter.com/home?lang=en',
            'text'=>'In 2019, we were recognized as one of the top shoe brands in the industry, winning several awards for our innovative designs and high-quality products.',
            'email' => 'RightyFit_ayesha_fatima_wajeeha@gmail.com',
        
        ]);
    }
}
