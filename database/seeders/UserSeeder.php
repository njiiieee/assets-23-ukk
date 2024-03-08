<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'username' => 'admin',
                'name' => 'IniAdmin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => Hash::make('password'),
                'alamat' => 'JL.ManggaDua',
                'gender' => 'L',
                'tglahir' => now()->format("Y-m-d"),
            ],

            [
                'username' => 'user',
                'name' => 'IniUser',
                'email' => 'user@gmail.com',
                'level' => 'user',
                'password' => Hash::make('password'),
                'alamat' => 'JL.ManggaDua',
                'gender' => 'L',
                'tglahir' => now()->format("Y-m-d"),
            ],
            [
                'username' => 'petugas',
                'name' => 'Inipetugas',
                'email' => 'petugas@gmail.com',
                'level' => 'petugas',
                'password' => Hash::make('password'),
                'alamat' => 'JL.ManggaDua',
                'gender' => 'L',
                'tglahir' => now()->format("Y-m-d"),
            ],
        ]);
    }
}
