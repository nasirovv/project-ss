<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert(
            [
                'id'        => 1,
                'user_id'   => 1,
                'address'   => 'some',
                'longitude' => 122,
                'latitude'  => 1221,
                'status'    => 'pending'
            ]
        );
    }
}
