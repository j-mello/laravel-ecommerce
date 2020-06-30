<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Mangue',
            'slug' => 'mangue',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet.',
            'price' => 5,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet. Nam feugiat magna magna, a ullamcorper turpis dapibus at. Phasellus justo massa, varius ut hendrerit non, molestie non sapien. Donec et libero quam. Morbi iaculis augue sit amet hendrerit pulvinar. Suspendisse mattis orci orci, eu scelerisque elit ornare at.',
            'category_id' => Category::all()->random()->id

        ]);

        Product::create([
            'name' => 'Banane',
            'slug' => 'banane',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet.',
            'price' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet. Nam feugiat magna magna, a ullamcorper turpis dapibus at. Phasellus justo massa, varius ut hendrerit non, molestie non sapien. Donec et libero quam. Morbi iaculis augue sit amet hendrerit pulvinar. Suspendisse mattis orci orci, eu scelerisque elit ornare at.',
            'category_id' => Category::all()->random()->id

        ]);

        Product::create([
            'name' => 'Pomme',
            'slug' => 'pomme',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet.',
            'price' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet. Nam feugiat magna magna, a ullamcorper turpis dapibus at. Phasellus justo massa, varius ut hendrerit non, molestie non sapien. Donec et libero quam. Morbi iaculis augue sit amet hendrerit pulvinar. Suspendisse mattis orci orci, eu scelerisque elit ornare at.',
            'category_id' => Category::all()->random()->id

        ]);

        Product::create([
            'name' => 'Ananas',
            'slug' => 'ananas',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet.',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet. Nam feugiat magna magna, a ullamcorper turpis dapibus at. Phasellus justo massa, varius ut hendrerit non, molestie non sapien. Donec et libero quam. Morbi iaculis augue sit amet hendrerit pulvinar. Suspendisse mattis orci orci, eu scelerisque elit ornare at.',
            'category_id' => Category::all()->random()->id

        ]);

        Product::create([
            'name' => 'Melon',
            'slug' => 'melon',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet.',
            'price' => 3,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet. Nam feugiat magna magna, a ullamcorper turpis dapibus at. Phasellus justo massa, varius ut hendrerit non, molestie non sapien. Donec et libero quam. Morbi iaculis augue sit amet hendrerit pulvinar. Suspendisse mattis orci orci, eu scelerisque elit ornare at.',
            'category_id' => Category::all()->random()->id

        ]);

        Product::create([
            'name' => 'Pasteque',
            'slug' => 'pasteque',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet.',
            'price' => 7,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet. Nam feugiat magna magna, a ullamcorper turpis dapibus at. Phasellus justo massa, varius ut hendrerit non, molestie non sapien. Donec et libero quam. Morbi iaculis augue sit amet hendrerit pulvinar. Suspendisse mattis orci orci, eu scelerisque elit ornare at.',
            'category_id' => Category::all()->random()->id

        ]);

        Product::create([
            'name' => 'Raisin',
            'slug' => 'raisin',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet.',
            'price' => 4,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet. Nam feugiat magna magna, a ullamcorper turpis dapibus at. Phasellus justo massa, varius ut hendrerit non, molestie non sapien. Donec et libero quam. Morbi iaculis augue sit amet hendrerit pulvinar. Suspendisse mattis orci orci, eu scelerisque elit ornare at.',
            'category_id' => Category::all()->random()->id

        ]);

        Product::create([
            'name' => 'Citron',
            'slug' => 'citron',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet.',
            'price' => 2,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet. Nam feugiat magna magna, a ullamcorper turpis dapibus at. Phasellus justo massa, varius ut hendrerit non, molestie non sapien. Donec et libero quam. Morbi iaculis augue sit amet hendrerit pulvinar. Suspendisse mattis orci orci, eu scelerisque elit ornare at.',
            'category_id' => Category::all()->random()->id

        ]);

        Product::create([
            'name' => 'Orange',
            'slug' => 'orange',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet.',
            'price' => 1,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dolor felis, tincidunt quis urna in, blandit ultricies dui. Phasellus vulputate nisi id ex pellentesque imperdiet. Nam feugiat magna magna, a ullamcorper turpis dapibus at. Phasellus justo massa, varius ut hendrerit non, molestie non sapien. Donec et libero quam. Morbi iaculis augue sit amet hendrerit pulvinar. Suspendisse mattis orci orci, eu scelerisque elit ornare at.',
            'category_id' => Category::all()->random()->id

        ]);
    }
}
