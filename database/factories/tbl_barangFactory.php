<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tbl_barang>
 */
class tbl_barangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'KODEBRG'=>fake()->isbn10(),
            'NAMABRG'=>fake()->word(),
            'SATUAN'=>'unit',
            'HARGABELI'=>fake()->randomNumber(5,true),
        ];
    }
}
