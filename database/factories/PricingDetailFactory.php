<?php

namespace Database\Factories;

use App\Models\PricingDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class PricingDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PricingDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'option'=>$this->faker->sentence(random_int(2,4))
        ];
    }
}
