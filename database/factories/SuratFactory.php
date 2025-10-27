<?php

namespace Database\Factories;

use App\Models\Surat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Surat>
 */
class SuratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {

        return [
            'kategori' => $this->faker->randomElement(['kelembagaan', 'pengembangan', 'pemberdayaan', 'pengawasan', 'sekretariat', 'kepegawaian']),
            'no_surat' => strtoupper($this->faker->bothify('###/ABC/IV/2025')),
            'kode_surat' => strtoupper($this->faker->lexify('KODE-???')),
            'perihal' => $this->faker->sentence(3),
            'tanggal_surat' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'tertuju' => $this->faker->name(),
            'jenis_surat' => $this->faker->randomElement(['kelembagaan', 'pengembangan', 'pemberdayaan', 'pengawasan', 'sekretariat', 'kepegawaian']),
            'file' => 'files/cv_dani.pdf',
        ];
    }
}
