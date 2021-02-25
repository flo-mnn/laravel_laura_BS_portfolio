<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([
            [
                'icon'=>'bx bxl-twitter',
            ],
            [
                'icon'=>'bx bxl-facebook',
            ],
            [
                'icon'=>'bx bxl-instagram',
            ],
            [
                'icon'=>'bx bxl-skype',
            ],
            [
                'icon'=>'bx bxl-linkedin',
            ],
        ]);
    }
}
