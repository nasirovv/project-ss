<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'id'          => 1,
                'name'        => 'Product 1',
                'description' => 'Product 1',
                'price'       => 'Product 1',
                'quantity'    => 11,
                'active'      => true,
                'category_id' => 1
            ]
        );

        DB::table('products')->insert(
            [
                'id'          => 2,
                'name'        => 'Product 2',
                'description' => 'Product 2',
                'price'       => 'Product 2',
                'quantity'    => 22,
                'active'      => true,
                'category_id' => 1
            ]
        );

        DB::table('products')->insert(
            [
                'id'          => 3,
                'name'        => 'Product 3',
                'description' => 'Product 3',
                'price'       => 'Product 3',
                'quantity'    =>  33,
                'active'      => true,
                'category_id' => 2
            ]
        );
    }
}
