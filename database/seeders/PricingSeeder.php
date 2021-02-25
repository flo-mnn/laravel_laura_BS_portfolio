<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricings')->insert([
            [
                'title'=>'Free',
                'price'=>0,
                'options'=>3,
                'featured'=>false,
                'advanced'=>null
            ],
            [
                'title'=>'Business',
                'price'=>19,
                'options'=>4,
                'featured'=>true,
                'advanced'=>null
            ],
            [
                'title'=>'Developer',
                'price'=>29,
                'options'=>5,
                'featured'=>false,
                'advanced'=>null

            ],
            [
                'title'=>'Ultimate',
                'price'=>49,
                'options'=>5,
                'featured'=>false,
                'advanced'=>'advanced'
            ]
        ]);
    }
}
