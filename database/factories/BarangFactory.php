<?php

namespace Database\Factories;


use FakerRestaurant\Provider\id_ID\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\barang;
use Faker\Factory as Faker;

class BarangFactory extends Factory
{
    protected $model = barang::class;

    public function definition(): array
    {
        $faker = Faker::create();
        $faker->addProvider(new Restaurant($faker));

        $hrg = ['5000', '7500', '10000', '12500', '15000', '17500', '20000', '22500', '25000', '30000'];
        $getHrg = $hrg[array_rand($hrg)];
        $getHrgJual = $getHrg + (10/100 * $getHrg);

        return [
            'nama_barang' => $faker->foodName(),
            'harga_beli' => $getHrg,
            'harga_jual' => $getHrgJual
        ];
    }
}
