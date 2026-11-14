<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Seller;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=Category::all();
        $sellers=Seller::all();

        foreach($categories as $category){

        Product::factory(10)->for($category,'category')->for($sellers->random(),'seller')->create();

        }
    }
}
