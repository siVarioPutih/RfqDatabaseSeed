<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\dataPembelian;
use Faker\Factory as Faker;
class seedPembelianSeeder extends Seeder
{
    public function run(): void
    {
       dataPembelian::factory(1000)->create();
    }
}
