<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_details')->insert([
            'title'=>'Project Information',
            'cat'=>'Category',
            'client'=>'Client',
            'date'=>'Project Date',
            'url'=>'Project URL',
        ]);
    }
}
