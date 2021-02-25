<?php

namespace Database\Seeders;

use App\Models\PricingDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        PricingDetail::factory(5)->create();
        $this->call([
            AboutArrowSeeder::class,
            AboutDigitalSkillSeeder::class,
            AboutNumberSeeder::class,
            ContactCardsHeadSeeder::class,
            EducationSeeder::class,
            EmailSeeder::class,
            ExperienceSeeder::class,
            FooterSeeder::class,
            FormSeeder::class,
            NavlinkSeeder::class,
            PageButtonSeeder::class,
            PageImageSeeder::class,
            PhoneSeeder::class,
            PortfolioDetailSeeder::class,
            PortfolioItemSeeder::class,
            PortfolioFilterSeeder::class,
            PricingSeeder::class,
            ResumeSubtitleSeeder::class,
            ResumeSummarySeeder::class,
            ServiceSeeder::class,
            SocialSeeder::class,
            TestimonialSeeder::class,
            TitleSeeder::class

        ]);
    }
}
