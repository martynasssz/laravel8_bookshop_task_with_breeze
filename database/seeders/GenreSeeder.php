<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()  //create manual genres
    {
        Genre::create(['name' => 'Detective']);  //create name in Gene db table
        Genre::create(['name' => 'Science Fiction']);
        Genre::create(['name' => 'Romance']);

    }
}
