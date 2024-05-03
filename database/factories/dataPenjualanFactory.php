<?php

namespace Database\Factories;

use App\Models\dataPenjualan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Faker\Factory as Faker;

class dataPenjualanFactory extends Factory
{
    protected $model = dataPenjualan::class;

    public function definition(): array
    {
        $faker = Faker::create();

        return [
            'id_barang' => $faker->numberBetween(1, 35),
            'qty_jual' => $faker->numberBetween(1, 25),
            'tgl_transaksi_jual' => $faker->dateTimeBetween('-4 months'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
