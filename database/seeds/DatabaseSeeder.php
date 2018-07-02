<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Product::class,50)->create();
        factory(Review::class,300)->create();
    }
}
