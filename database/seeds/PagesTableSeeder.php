<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

use Faker\Generator as Faker;
use App\Page;
use App\User;
use App\Category;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $user = User::inRandomOrder()->first();
            $category = Category::inRandomOrder()->first();
            $page = new Page;
            $page->user_id = $user->id;
            $page->category_id = $category->id;
            $page->title = $faker->sentence(5, true);
            $page->body = $faker->paragraph(5, true);
            $now = Carbon::now();
            $page->slug = Str::slug($page->title, '-') . '-' . $now->format('Y-m-d-H-i-s'); 
            $page->save();
        }
    }
}
