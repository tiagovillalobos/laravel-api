<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::firstOrCreate(['name' => 'Heavy Metal']);
        Genre::firstOrCreate(['name' => 'Thrash Metal']);
        Genre::firstOrCreate(['name' => 'Death Metal']);
        Genre::firstOrCreate(['name' => 'Black Metal']);
        Genre::firstOrCreate(['name' => 'Power Metal']);
        Genre::firstOrCreate(['name' => 'Progressive Metal']);
        Genre::firstOrCreate(['name' => 'Doom Metal']);
        Genre::firstOrCreate(['name' => 'Gothic Metal']);
        Genre::firstOrCreate(['name' => 'Symphonic Metal']);
        Genre::firstOrCreate(['name' => 'Folk Metal']);
        Genre::firstOrCreate(['name' => 'Viking Metal']);
        Genre::firstOrCreate(['name' => 'Pagan Metal']);
        Genre::firstOrCreate(['name' => 'Industrial Metal']);
        Genre::firstOrCreate(['name' => 'Glam Metal']);
        Genre::firstOrCreate(['name' => 'Groove Metal']);
        Genre::firstOrCreate(['name' => 'Nu Metal']);
        Genre::firstOrCreate(['name' => 'Metalcore']);
        Genre::firstOrCreate(['name' => 'Deathcore']);
        Genre::firstOrCreate(['name' => 'Post Metal']);
        Genre::firstOrCreate(['name' => 'Alternative Metal']);
        Genre::firstOrCreate(['name' => 'Rap Metal']);
        Genre::firstOrCreate(['name' => 'Funk Metal']);
        Genre::firstOrCreate(['name' => 'Grindcore']);
        Genre::firstOrCreate(['name' => 'Hard Rock']);
        Genre::firstOrCreate(['name' => 'Progressive Rock']);
        Genre::firstOrCreate(['name' => 'Punk Rock']);
        Genre::firstOrCreate(['name' => 'Grunge']);
        Genre::firstOrCreate(['name' => 'Alternative Rock']);
        Genre::firstOrCreate(['name' => 'Indie Rock']);
        Genre::firstOrCreate(['name' => 'Post Rock']);
        Genre::firstOrCreate(['name' => 'Post Punk']);
        Genre::firstOrCreate(['name' => 'Gothic Rock']);
        Genre::firstOrCreate(['name' => 'New Wave']);
        Genre::firstOrCreate(['name' => 'Hardcore Punk']);
        Genre::firstOrCreate(['name' => 'Crust Punk']);
        Genre::firstOrCreate(['name' => 'Thrashcore']);
        Genre::firstOrCreate(['name' => 'Crossover']);
        Genre::firstOrCreate(['name' => 'Emo']);
        Genre::firstOrCreate(['name' => 'Screamo']);
    }
}
