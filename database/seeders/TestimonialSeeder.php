<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'src'=>'testimonials/testimonials-1.jpg',
                'name'=>'Saul Goodman',
                'job'=>'Ceo &amp; Founder',
                'quote'=>'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'
            ],
            [
                'src'=>'testimonials/testimonials-2.jpg',
                'name'=>'Sara Wilson',
                'job'=>'Designer',
                'quote'=>'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.'
            ],
            [
                'src'=>'testimonials/testimonials-3.jpg',
                'name'=>'Jena Karlis',
                'job'=>'Store Owner',
                'quote'=>'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.'
            ],
            [
                'src'=>'testimonials/testimonials-4.jpg',
                'name'=>'Matt Brandon',
                'job'=>'Freelancer',
                'quote'=>'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.'
            ],
            [
                'src'=>'testimonials/testimonials-5.jpg',
                'name'=>'John Larson',
                'job'=>'Entrepreneur',
                'quote'=>'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.'
            ],
        ]);
    }
}
