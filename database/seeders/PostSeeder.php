<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'food',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => 'hobby',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'aaaa',
            'email' => 'ioioype3121@gmail.com',
            'email_verified_at' => NULL,
            'password' => '$2y$10$sUOFkAiShhzXSFnELDn4/.5K0BVgOiD7Q/l0i2Y/17Mf1nOacprFq',
            'remember_token' => NULL,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        
    }
}
