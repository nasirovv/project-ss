<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_items')->insert(
            [
                'id'         => 1,
                'product_id' => 1,
                'order_id'   => 1,
                'quantity'   => 22,
            ]
        );
    }
}
