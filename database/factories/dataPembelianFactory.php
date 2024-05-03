<?php

namespace Database\Factories;

use App\Models\dataPembelian;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Faker\Factory as Faker;

class dataPembelianFactory extends Factory
{
    protected $model = dataPembelian::class;

    public function definition(): array
    {
        $faker = Faker::create();

        return [
            'id_barang' => $faker->numberBetween(1, 35),
            'qty_beli' => $faker->numberBetween(1, 25),
            'tgl_transaksi_beli' => $faker->dateTimeBetween('-4 months'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
