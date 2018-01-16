<?php

use Illuminate\Database\Seeder;
use App\ProductType;

class Product_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product_type = new ProductType;
      $product_type->name = 'Drinks';
      $product_type->save();

      $product_type->name = 'Snacks';
      $product_type->save();

      $product_type->name = 'Clothes';
      $product_type->save();

      $product_type->name = 'Jewels';
      $product_type->save();

      product_type->name = 'Electronics';
      $product_type->save();
    }
}
