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
                'icon_contact'=>'icofont-twitter',
                'icon_footer'=>'bx bxl-twitter',
            ],
            [
                'icon_contact'=>'icofont-facebook',
                'icon_footer'=>'bx bxl-facebook',
            ],
            [
                'icon_contact'=>'icofont-instagram',
                'icon_footer'=>'bx bxl-instagram',
            ],
            [
                'icon_contact'=>'icofont-skype',
                'icon_footer'=>'bx bxl-skype',
            ],
            [
                'icon_contact'=>'icofont-linkedin',
                'icon_footer'=>'bx bxl-linkedin',
            ],
        ]);
    }
}
