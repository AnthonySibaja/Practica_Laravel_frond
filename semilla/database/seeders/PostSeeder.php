<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'title' => \Illuminate\Support\Str::random(10),
            'role_id'=>1,
            'content'=>\Illuminate\Support\Str::random(10),
            

        ]);
    }
}
