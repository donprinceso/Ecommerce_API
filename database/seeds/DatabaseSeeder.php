<?php

use Illuminate\Database\Seeder;
use Prophecy\Comparator\Factory;
use App\Model\Product;
use App\Model\Reviews;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Product::class,40)->create();
        factory(Reviews::class,200)->create();
    }
}