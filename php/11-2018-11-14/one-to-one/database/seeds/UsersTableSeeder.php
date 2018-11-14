<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        $passports = App\Passport::pluck('id');
        foreach ($passports as $key => $value) {
            App\User::create([
                'name' => $faker->name,
                'passport_id' => $value,
            ]);
        }
    }
}
