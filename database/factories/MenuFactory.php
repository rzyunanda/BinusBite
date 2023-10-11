<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        // return [
        //     'name' => $this->faker->sentence(mt_rand(2,7)),
        //     'category' => $this->faker->realtextBetween(5, 15, 1),
        //     'description' => $this->faker->realtextBetween(100, 150, 2),
        //     'image' => $this->faker->imageUrl(640, 480, 'foods'),
        //     'price' => $this->faker->numberBetween(12000, 25000)
        // ];
        
        $faker = FakerFactory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\id_ID\Restaurant($faker));

        return [
            'name' => $faker->foodName(),
            'category' => $faker->realtextBetween(5, 15, 1),
            'description' => $faker->realtextBetween(100, 150, 2),
            'image' => $faker->imageUrl(640, 480, 'foods'),
            'price' => $faker->numberBetween(120, 230) * 100
        ];
    }
}
