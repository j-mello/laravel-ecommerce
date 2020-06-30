<?php

use Carbon\Carbon;
use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            [
                "name" => 'Fruit',
                "slug" => 'fruit',
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "name" => 'Vegetable',
                "slug" => 'vegetable',
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "name" => 'Meat',
                "slug" => 'meat',
                "created_at" => $now,
                "updated_at" => $now
            ],
            [
                "name" => 'Drink',
                "slug" => 'drink',
                "created_at" => $now,
                "updated_at" => $now
            ]
        ]);
    }
}
