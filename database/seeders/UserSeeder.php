<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'agus',
            'email' => 'agus@davinci.com',
            'password' => Hash::make('123'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Antonio',
            'email' => 'tony@davinci.com',
            'password' => Hash::make('456'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'thomas',
            'email' => 'thom@davinci.com',
            'password' => Hash::make('789'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'esteban',
            'email' => 'fantasma@davinci.com',
            'password' => Hash::make('fantasma'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'random',
            'email' => 'random@davinci.com',
            'password' => Hash::make('random'),
            'role' => 'client',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'hernan',
            'email' => 'hernan@davinci.com',
            'password' => Hash::make('hernan'),
            'role' => 'client',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'pepe',
            'email' => 'pepe@davinci.com',
            'password' => Hash::make('pepe'),
            'role' => 'client',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
