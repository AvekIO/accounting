<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentsFactory extends Factory
{
    private const MEDIUM_INT_UNSIGNED_MAX = 16777215;

    public function definition(): array
    {
        $timestamp = $this->faker->dateTimeBetween('-1 year');

        return [
            'client_tariff_id' => rand(0, self::MEDIUM_INT_UNSIGNED_MAX),
            'price' => rand(0, self::MEDIUM_INT_UNSIGNED_MAX),
            'data' => json_encode([]),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
