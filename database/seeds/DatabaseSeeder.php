<?php

use Illuminate\Database\Seeder;
use Prophecy\Comparator\Factory;
use App\Model\Product;
use App\Model\Review;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,5)->create();
        factory(Product::class,40)->create();
        factory(Review::class,200)->create();
    }
}
