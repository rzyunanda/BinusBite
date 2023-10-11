<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::factory(10)->create();

    //     DB::table('menus')->insert([
    //         'name' => fake()->sentence(mt_rand(2,7)),
    //         'category' => fake()->sentence(),
    //         'description' => fake()->realtextBetween(100, 150, 2),
    //         'image' => fake()->imageUrl(640, 480, 'foods'),
    //         'price' => fake()->numberBetween(12000, 25000) 
    //     ]);
    }
}
