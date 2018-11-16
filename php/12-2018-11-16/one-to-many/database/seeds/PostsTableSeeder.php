<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
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
        $categoriesId = App\Category::pluck('id')->toArray();

        // [1,2,3] = $categoriesId
        // dd($categoriesId[array_rand($categoriesId)]);
        // dd($categoriesId);
        foreach (range(1, 10) as $index) {
            App\Post::create([
                'title' => $faker->name,
                'description' => $faker->paragraph,
                'content' => $faker->randomHtml(),
                'category_id' => $categoriesId[array_rand($categoriesId)],
            ]);
        }
    }
}
