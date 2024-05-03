<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\dataPenjualan;
use Faker\Factory as Faker;
class seedJualSeeder extends Seeder
{
    public function run(): void
    {
        dataPenjualan::factory(2000)->create();
    }
}
