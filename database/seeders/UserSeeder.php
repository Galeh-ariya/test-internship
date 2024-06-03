<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\table;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Galeh Ariya Irwana',
            'email' => '3130021003@student.unusa.ac.id',
            'password' => Hash::make('rahasia'),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Nizar Nanda Rochman',
            'email' => '3130021007@student.unusa.ac.id',
            'password' => Hash::make('rahasia'),
        ]);
    }
}
