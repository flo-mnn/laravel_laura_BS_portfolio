<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_images')->insert([
            [
                'src'=>'/img/hero-bg.jpg'
            ],
            [
                'src'=>'/img/me.jpg'
            ],
            [
                'src'=>'/img/testimonials-bg.jpg'
            ],
            [
                'src'=>'/img/footer-bg.jpg'
            ]
        ]);
    }
}