<?php

use App\Passport;
use Illuminate\Database\Seeder;

class PassportsTableSeeder extends Seeder
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
            Passport::create([
                'number' => $faker->creditCardNumber,
            ]);
        }
    }
}
