<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'genre_name' => 'Horror',
        ]);

        Genre::create([
            'genre_name' => 'Romantic',
        ]);

        Genre::create([
            'genre_name' => 'Action',
        ]);
    }
}
