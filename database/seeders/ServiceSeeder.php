<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'icon'=>"bx bxl-dribble",
                'title'=>"Lorem Ipsum",
                'text'=>"Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident"
            ],
            [
                'icon'=>"bx bx-file",
                'title'=>"Sed ut perspiciatis",
                'text'=>"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur"
            ],
            [
                'icon'=>"bx bx-tachometer",
                'title'=>"Magni Dolores",
                'text'=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"
            ],
            [
                'icon'=>"bx bx-world",
                'title'=>"Nemo Enim",
                'text'=>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque"
            ],
        ]);
    }
}
