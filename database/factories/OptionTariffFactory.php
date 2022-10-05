<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OptionTariffFactory extends Factory
{
    private const SMALL_INT_UNSIGNED_MAX = 65535;

    public function definition(): array
    {
        return [
            'tariff_id' => rand(0, self::SMALL_INT_UNSIGNED_MAX),
            'option_id' => rand(0, self::SMALL_INT_UNSIGNED_MAX),
            'created_at' => $this->faker->dateTimeBetween('-1 year'),
        ];
    }
}
