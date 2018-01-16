<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class Product_CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_category = new ProductCategory;
        $product_category->name = 'Brand New';
        $product_category->save();

        $product_category = new ProductCategory;
        $product_category->name = 'Fairly Used';
        $product_category->save();

        $product_category = new ProductCategory;
        $product_category->name = 'Very Used';
        $product_category->save();
    }
}
