<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RekamMedis;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RekamMedis>
 */
class MedicalRecordFakerFactory extends Factory
{
    protected $model = RekamMedis::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {

        $faker = \Faker\Factory::create('id');
        return [
            'pasien_id' => $faker->randomElement([1,3]),
            'dokter_id' => $faker->randomElement([1,4]),
            'kondisi_kesehatan' => $faker->randomElement(['Sakit parah','Sakit ringan', 'Koma', 'Komplikasi']),
            'suhu_tubuh' => $faker->randomFloat(2, 35, 45.5),
        ];
    }
}
