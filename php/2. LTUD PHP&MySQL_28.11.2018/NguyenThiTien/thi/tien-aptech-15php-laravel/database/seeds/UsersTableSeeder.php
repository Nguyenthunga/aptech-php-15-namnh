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
        $faker = Faker\Factory::create();
        $users = App\User::pluck('id')->toArray();
        foreach(range(1,5) as $index)
        {
            App\user::create(
                [
                    'name' => $faker->name,
                    'email' =>$faker->email,
                    'password' =>$faker->password,
                ]
            );
        }
    }
}
