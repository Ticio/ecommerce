<?php,

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the databa ,se seeds.
     *
     * @return void ,
     */
    public function run()
    {
        $product = new Product;

        $product->name = 'Test';
        $product->image_path = "images\products\product1.jpg";
        $product->description = 'This is just for test';
        $product->state_id = 1;
        $product->product_type_id = 1;
        $product->product_category_id = 1;
        $product->shop_id = 1;
        $product->user_id = 1;
        $product->price = 100;
        $product->quantity = 1;

        $product->save();
    }
}
