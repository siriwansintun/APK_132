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
                    'product_name' => 'Blueberry Smoothie',
                    'product_type' => 1,
                    'price' => 45,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),

                ],
                [
                    'product_name' => 'Chocolate Mousse',
                    'product_type' => 1,
                    'price' => 50,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'product_name' => 'Vanilla Coconut Ice Cream',
                    'product_type' => 2,
                    'price' => 59,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'product_name' => 'Chocolate Fudge Cake',
                    'product_type' => 2,
                    'price' => 60,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ]


        );
    }
};
