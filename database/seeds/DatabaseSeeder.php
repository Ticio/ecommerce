<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(StatesTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(Shop_TypesTableSeeder::class);
        // $this->call(ShopsTableSeeder::class);
        // $this->call(Product_TypesTableSeeder::class );
        //$this->call(Product_CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
