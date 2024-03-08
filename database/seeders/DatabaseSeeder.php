<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call(UserSeeder::class);

        Book::insert([
            [
                "title" => "Buku 1",
                "author" => "gw",
                "description" => "bagus",
                "year" => 2020,
                "genre" => "Mabar",
                "stock" => 1,
                "image" => "public/posts",
            ],
            [
                "title" => "Buku 2",
                "author" => "gw juga",
                "description" => "bagus banget",
                "year" => 2021,
                "genre" => "Mabar anjay",
                "stock" => 10,
                "image" => "public/posts",
            ],
            [
                "title" => "Buku 3",
                "author" => "gw juga",
                "description" => "bagus aja",
                "year" => 2012,
                "genre" => "Mabar anjae",
                "stock" => 9,
                "image" =>"public/posts",
            ],
        ]);
    }
}
