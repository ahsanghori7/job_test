<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;
use App\Models\Comment;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $film_id  = Film::create([
            'name' => 'RRR',
            'description' => 'South Indian',
            'release_date' => '2022-06-08 00:14:07',
            'rating' => '6',
            'ticket_price' => '1500 Rs',
            'country' => 'Indian',
            'photo' => 'RRR.jpg',
        ])->id;


        Comment::create([
            'comment' => 'Dummy',
            'film_id' => $film_id,
            'added_by' => 1,
        ]);

        $film_id  = Film::create([
            'name' => 'Jalsa',
            'description' => 'Indian',
            'release_date' => '2022-06-08 00:14:07',
            'rating' => '6',
            'ticket_price' => '1500 Rs',
            'country' => 'Indian',
            'photo' => 'Jalsa.jpg',
        ])->id;

        Comment::create([
            'comment' => 'Dummy',
            'film_id' => $film_id,
            'added_by' => 1,
        ]);

        $film_id  = Film::create([
            'name' => 'Shershaah',
            'description' => 'Indian',
            'release_date' => '2022-06-08 00:14:07',
            'rating' => '6',
            'ticket_price' => '1500 Rs',
            'country' => 'Indian',
            'photo' => 'Shershaah.jpg',
        ])->id;


        Comment::create([
            'comment' => 'Dummy',
            'film_id' => $film_id,
            'added_by' => 1,
        ]);
    }
}
