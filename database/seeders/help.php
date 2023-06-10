<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class help extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('help')->insert([
            'heading' => 'HELP',
            'information' => 'Please do not hesitate to get in touch with us if you have any questions about our products or company! Our team is happy to help and try our best to respond to emails within 24hrs. Please call us at +923341234567 (10 AM to 5 PM)',
            'image' => "https://cdn.shopify.com/s/files/1/0671/0621/files/contact-us-banner_1200x_b5d96e9c-3ac4-4678-9aff-aba24ff2b0fc_600x.jpg?v=1634803122",
        ]);
    }
}
