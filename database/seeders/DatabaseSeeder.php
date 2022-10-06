<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\User::factory()->create([
            'name' => 'Ali hassn',
            'email' => 'ali@admin.com'
         ]);

         \App\Models\Category::factory(10)->create();
         \App\Models\Category::factory(10)->create([
            'parent_id' => \App\Models\Category::all()->random()->id
         ]);
         \App\Models\Discount::factory(10)->create();
         $products =\App\Models\Product::factory(50)->create();
          //\App\Models\Product::all();
         foreach($products as $product){
            $product->image()->save(\App\Models\Image::factory()->make());
            $discounts_ids = [];
            $discounts_ids[] = \App\Models\Discount::all()->random()->id;
            $discounts_ids[] = \App\Models\Discount::all()->random()->id;
            $discounts_ids[] = \App\Models\Discount::all()->random()->id;

            $product->discounts()->sync($discounts_ids);
         }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
