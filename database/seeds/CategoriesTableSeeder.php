<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;
use App\User;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for ($i=0; $i < 8; $i++) {
            $user = User::inRandomOrder()->first();
            $category = new Category;
            $category->user_id = $user->id;
            $category->name = $faker->word();
            $category->description = $faker->sentence(5, true);

            $category->save();
        }
       
    }
}
