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
            'description' => 'Hosh Mosh is a brand that sells clothes'
        ]);

        Brand::create([
            'brand_name' => 'Maximal',
            'top5_flag' => true,
            'description' => 'Maximal is a brand that sells clothes'
        ]);

        Brand::create([
            'brand_name' => 'Pulu',
            'top5_flag' => true,
            'description' => 'Pulu is a brand that sells clothes'
        ]);

        Brand::create([
            'brand_name' => 'Adadah',
            'top5_flag' => true,
            'description' => 'Adadah is a brand that sells clothes'
        ]);

        Brand::create([
            'brand_name' => 'Hawee',
            'top5_flag' => true,
            'description' => 'Hawee is a brand that sells clothes'
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
            'item_name' => 'Hosh Mosh Shirt',
            'brand_id' => 1,
            'category_id' => 1,
            'price' => 100000,
            'description' => 'Skirt'
        ]);

        Item::create([
            'item_name' => 'Maximal Shirt',
            'brand_id' => 2,
            'category_id' => 1,
            'price' => 100000,
            'description' => 'Shirt'
        ]);

        Item::create([
            'item_name' => 'Pulu Shirt',
            'brand_id' => 3,
            'category_id' => 1,
            'price' => 100000,
            'description' => 'Skrit'
        ]);

        Item::create([
            'item_name' => 'Adadah Shirt',
            'brand_id' => 4,
            'category_id' => 1,
            'price' => 100000,
            'description' => 'As'
        ]);

        Item::create([
            'item_name' => 'Hawee Shirt',
            'brand_id' => 5,
            'category_id' => 1,
            'price' => 100000,
            'description' => 'Hsasd'
        ]);

        Item::create([
            'item_name' => 'Hosh Mosh Bag',
            'brand_id' => 1,
            'category_id' => 2,
            'price' => 100000,
            'description' => 'Hosad'
        ]);

        Item::create([
            'item_name' => 'Maximal Bag',
            'brand_id' => 2,
            'category_id' => 2,
            'price' => 100000,
            'description' => 'Maximal Bag '
        ]);

        Item::create([
            'item_name' => 'Pulu Bag',
            'brand_id' => 3,
            'category_id' => 2,
            'price' => 100000,
            'description' => 'Pulu Bag is s'
        ]);

        Item::create([
            'item_name' => 'Adadah Bag',
            'brand_id' => 4,
            'category_id' => 2,
            'price' => 100000,
            'description' => 'Adadah Bag is '
        ]);

        Item::create([
            'item_name' => 'Hawee Bag',
            'brand_id' => 5,
            'category_id' => 2,
            'price' => 100000,
            'description' => 'Hawee Bag is s'
        ]);

        Item::create([
            'item_name' => 'Hosh Mosh Shoes',
            'brand_id' => 1,
            'category_id' => 3,
            'price' => 100000,
            'description' => 'Hosh Mosh s'
        ]);


    }
}
