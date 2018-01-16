<?php

use Illuminate\Database\Seeder;
use App\ShopType;

class Shop_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop_type = new ShopType;

        $shop_type->name = 'Local';
        $shop_type->save();

        $shop_type->name = 'Clothes';
        $shop_type->save();

        $shop_type->name = 'Beverages';
        $shop_type->save();

        $shop_type->name = 'Diverse';
        $shop_type->save();

        $shop_type->name = 'Other';
        $shop_type->save();
    }
}
