<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => \Illuminate\Support\Str::random(10),
            'role_id'=>1,
            'is_active'=>1,
            'email' => \Illuminate\Support\Str::random(10) . '@coding.com',
            'password'=>bcrypt('secret')

        ]);
    }
}
