<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\barang;
use Faker\Factory as Faker;


class seedBarangSeeder extends Seeder
{
    public function run()
    {
        barang::factory(35)->create();
    }
}
