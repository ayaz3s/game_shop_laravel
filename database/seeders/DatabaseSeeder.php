<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $cat = Category::factory()->create(['name' => 'Xbox One Games']);
        Category::factory()->create(['name' => 'PS4 Games']);
        Category::factory()->create(['name' => 'Nintendo Wii Games']);
        Category::factory()->create(['name' => 'Xbox 360 Games']);
        Category::factory()->create(['name' => 'PS3 Games']);

        Product::factory()->create([
            'title' => 'assasin creed',
            'category_id' => $cat,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa cupiditate distinctio eaque enim esse est exercitationem impedit ipsa maiores maxime nihil nulla, officia perspiciatis quaerat, reiciendis sit unde vero.',
            'image' => 'game1.jpg',
            'price' => 59.99
        ]);
        Product::factory()->create([
            'title' => 'uncharted',
            'category_id' => $cat,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa cupiditate distinctio eaque enim esse est exercitationem impedit ipsa maiores maxime nihil nulla, officia perspiciatis quaerat, reiciendis sit unde vero.',
            'image' => 'game2.jpg',
            'price' => 59.99
        ]);
        Product::factory()->create([
            'title' => 'titan fall',
            'category_id' => $cat,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa cupiditate distinctio eaque enim esse est exercitationem impedit ipsa maiores maxime nihil nulla, officia perspiciatis quaerat, reiciendis sit unde vero.',
            'image' => 'game3.jpg',
            'price' => 59.99
        ]);
        Product::factory()->create([
            'title' => 'mirrors edge',
            'category_id' => $cat,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa cupiditate distinctio eaque enim esse est exercitationem impedit ipsa maiores maxime nihil nulla, officia perspiciatis quaerat, reiciendis sit unde vero.',
            'image' => 'game4.jpg',
            'price' => 59.99
        ]);
        Product::factory()->create([
            'title' => 'dishonoured',
            'category_id' => $cat,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa cupiditate distinctio eaque enim esse est exercitationem impedit ipsa maiores maxime nihil nulla, officia perspiciatis quaerat, reiciendis sit unde vero.',
            'image' => 'game5.jpg',
            'price' => 59.99
        ]);
        Product::factory()->create([
            'title' => 'quack wars',
            'category_id' => $cat,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa cupiditate distinctio eaque enim esse est exercitationem impedit ipsa maiores maxime nihil nulla, officia perspiciatis quaerat, reiciendis sit unde vero.',
            'image' => 'game6.jpg',
            'price' => 59.99
        ]);
        Product::factory()->create([
            'title' => 'sniper elite',
            'category_id' => $cat,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa cupiditate distinctio eaque enim esse est exercitationem impedit ipsa maiores maxime nihil nulla, officia perspiciatis quaerat, reiciendis sit unde vero.',
            'image' => 'game7.jpg',
            'price' => 59.99
        ]);

//        Order::factory()->create([
//            'title' => 'sniper elite',
//            'category_id' => $cat,
//            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem culpa cupiditate distinctio eaque enim esse est exercitationem impedit ipsa maiores maxime nihil nulla, officia perspiciatis quaerat, reiciendis sit unde vero.',
//            'image' => 'game7.jpg',
//            'price' => 59.99
//        ]);
    }
}
