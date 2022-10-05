<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientTariffFactory extends Factory
{
    private const SMALL_INT_UNSIGNED_MAX = 65535;
    private const MEDIUM_INT_UNSIGNED_MAX = 16777215;

    public function definition(): array
    {
        $timestamp = $this->faker->dateTimeBetween('-1 year');

        return [
            'client_id' => rand(0, self::MEDIUM_INT_UNSIGNED_MAX),
            'tariff_id' => rand(0, self::SMALL_INT_UNSIGNED_MAX),
            'expired_at' => $timestamp->addMonth(),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
