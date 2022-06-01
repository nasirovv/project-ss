<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'id'     => 1,
                'name'   => 'Something',
                'active' => true
            ]
        );

        DB::table('categories')->insert(
            [
                'id'     => 2,
                'name'   => 'Something 2',
                'active' => false
            ]
        );
    }
}
