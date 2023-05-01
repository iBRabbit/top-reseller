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

        

    }
}
