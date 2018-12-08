<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
        foreach (range(1, 20) as $index) {
            App\User::create([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => $faker->password,
            ]);
        }
    }
}
