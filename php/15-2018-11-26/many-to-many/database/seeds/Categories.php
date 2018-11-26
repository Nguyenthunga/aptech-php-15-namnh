<?php

use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        foreach (range(1, 3) as $index) {
            App\Category::create([
                'name' => $faker->word(3),
            ]);
        }
    }
}
