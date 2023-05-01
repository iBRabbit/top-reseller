<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        Brand::create([
            'brand_name' => 'Hosh Mosh',
            'top5_flag' => true,
            'description' => "Hosh Mosh was founded in 2023 exclusively only for Binus Mid Term Even Semester Purposes."
        ]);

        Brand::create([
            'brand_name' => 'Maximal',
            'top5_flag' => true,
            'description' => 'Maximal was founded in 2023 exclusively only for Binus Mid Term Even Semester Purposes.'
        ]);

        Brand::create([
            'brand_name' => 'Pulu',
            'top5_flag' => true,
            'description' => 'Pulu is a brand that sells clothes'
        ]);

        Brand::create([
            'brand_name' => 'Adadah',
            'top5_flag' => true,
            'description' => 'Adadah was founded in 2023 exclusively only for Binus Mid Term Even Semester Purposes.'
        ]);

        Brand::create([
            'brand_name' => 'Hawee',
            'top5_flag' => true,
            'description' => 'Hawee was founded in 2023 exclusively only for Binus Mid Term Even Semester Purposes.'
        ]);

        Brand::create([
            'brand_name' => 'Hush Dog',
            'top5_flag' => false,
            'description' => 'Hush Dog was founded in 2023 exclusively only for Binus Mid Term Even Semester Purposes.'
        ]);

        Category::create([
            'category_name' => 'Shirt'
        ]);

        Category::create([
            'category_name' => 'Bag'
        ]);
        
        Category::create([
            'category_name' => 'Shoes'
        ]);

        Category::create([
            'category_name' => 'Dress'
        ]);

        Item::create([
            'item_name' => 'Blue Shirt',
            'brand_id' => 1,
            'category_id' => 1,
            'price' => 100000,
            'description' => 'Blue shirt Hosh Mosh Shirt is  shirt'
        ]);

        Item::create([
            'item_name' => 'Kids Overall',
            'brand_id' => 1,
            'category_id' => 1,
            'price' => 150000,
            'description' => 'Kids Overall Hosh Mosh Shirt is the best imported dress'
        ]);

        Item::create([
            'item_name' => 'Baby Shoes',
            'brand_id' => 1,
            'category_id' => 3,
            'price' => 100000,
            'description' => 'Baby Shoes Hosh Mosh Shoes is the best imported shirt'
        ]);

        Item::create([
            'item_name' => 'Green Shirt',
            'brand_id' => 3,
            'category_id' => 1,
            'price' => 200000,
            'description' => 'Green Shirt Pulu Dress is the best imported shirt'
        ]);

        Item::create([
            'item_name' => 'Flower Shirt',
            'brand_id' => 5,
            'category_id' => 1,
            'price' => 300000,
            'description' => 'Flower Shirt Pulu Shirt is the best imported Shirt'
        ]);

        Item::create([
            'item_name' => 'Tote Bag',
            'brand_id' => 6,
            'category_id' => 2,
            'price' => 400000,
            'description' => 'Tote Bag dog bag is the best imported bag'
        ]);
        
        Item::create([
            'item_name' => 'Red Dress',
            'brand_id' => 2,
            'category_id' => 4,
            'price' => 500000,
            'description' => 'Red Dress dog bag is the best imported dress'
        ]);

        Item::create([
            'item_name' => 'Running Shoes',
            'brand_id' => 4,
            'category_id' => 3,
            'price' => 600000,
            'description' => 'Running Shoes his the best imported dress'
        ]);
        

    }
}
