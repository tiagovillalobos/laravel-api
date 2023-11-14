<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::firstOrCreate(['name' => 'Estados Unidos']);
        Country::firstOrCreate(['name' => 'Alemanha']);
        Country::firstOrCreate(['name' => 'Reino Unido']);
        Country::firstOrCreate(['name' => 'Suécia']);
        Country::firstOrCreate(['name' => 'Noruega']);
        Country::firstOrCreate(['name' => 'Finlândia']);
        Country::firstOrCreate(['name' => 'Dinamarca']);
        Country::firstOrCreate(['name' => 'Holanda']);
        Country::firstOrCreate(['name' => 'Canadá']);
        Country::firstOrCreate(['name' => 'Polônia']);
        Country::firstOrCreate(['name' => 'França']);
        Country::firstOrCreate(['name' => 'Itália']);
        Country::firstOrCreate(['name' => 'Austrália']);
        Country::firstOrCreate(['name' => 'Brasil']);
        Country::firstOrCreate(['name' => 'Grécia']);
        Country::firstOrCreate(['name' => 'Suíça']);
        Country::firstOrCreate(['name' => 'Áustria']);
        Country::firstOrCreate(['name' => 'Bélgica']);
        Country::firstOrCreate(['name' => 'Espanha']);
        Country::firstOrCreate(['name' => 'Portugal']);
        Country::firstOrCreate(['name' => 'Japão']);
        Country::firstOrCreate(['name' => 'República Tcheca']);
    }
}
