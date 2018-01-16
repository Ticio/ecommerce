<?php

use Illuminate\Database\Seeder;
use App\Shop;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shop = new Shop;

        $shop->name = 'Local';
        $shop->state_id = 1;
        $shop->shop_type_id = 1;
        $shop->user_id = 1;
        $shop->logo = 'none';
        
        $shop->save();
    }
}
