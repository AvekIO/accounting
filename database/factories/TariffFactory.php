<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TariffFactory extends Factory
{
    private const MEDIUM_INT_UNSIGNED_MAX = 16777215;

    public function definition(): array
    {
        $timestamp = $this->faker->dateTimeBetween('-1 year');

        return [
            'name' => $this->faker->text(255),
            'description' => $this->faker->text(1000),
            'price' => rand(0, self::MEDIUM_INT_UNSIGNED_MAX),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
