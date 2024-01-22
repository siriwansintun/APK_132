<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('products')->insert(
            [
                [
                    'product_name' => 'Iphon 14',
                    'product_type' => 1,
                    'price' => 39900,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),

                ],
                [
                    'product_name' => 'Galaxy S20',
                    'product_type' => 1,
                    'price' => 25900,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'product_name' => 'LG Smart TV',
                    'product_type' => 2,
                    'price' => 30900,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'product_name' => 'Samsung Smart TV',
                    'product_type' => 2,
                    'price' => 40900,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ]


        );
    }
};
