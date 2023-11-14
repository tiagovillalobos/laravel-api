<?php

namespace Database\Seeders;

use App\Models\Band;
use App\Models\Country;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unitedStates = Country::where('name', 'Estados Unidos')->first();
        $germany = Country::where('name', 'Alemanha')->first();
        $brazil = Country::where('name', 'Brasil')->first();

        $trashMetal = Genre::where('name', 'Thrash Metal')->first();
        $blackMetal = Genre::where('name', 'Black Metal')->first();

        $metallica = Band::firstOrCreate([
            'name' => 'Metallica',
            'country_id' => $unitedStates->id,
        ]);

        $metallica->genres()->attach($trashMetal->id);

        $destruction = Band::firstOrCreate([
            'name' => 'Destruction',
            'country_id' => $germany->id,
        ]);

        $destruction->genres()->attach($trashMetal->id);

        $sodom = Band::firstOrCreate([
            'name' => 'Sodom',
            'country_id' => $germany->id,
        ]);

        $sodom->genres()->attach($trashMetal->id);

        $sarcofago = Band::firstOrCreate([
            'name' => 'Sarcófago',
            'country_id' => $brazil->id,
        ]);

        $sarcofago->genres()->attach($blackMetal->id);


    }
}
