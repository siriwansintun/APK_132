<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
class UsersSeeder extends Seeder
{
    /**
     * Run the migrations.
     */
    public function run()
    {
        DB::table('users') ->insert ([
           [
            'name'=> 'Siriwan Sintun',
            'email'=> 'siriwansintun2545@gmail.com',
            'password'=> Hash::make('1234'),
            'address'=> 'Thaksin University',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),

           ]
    ]);
    }
};
