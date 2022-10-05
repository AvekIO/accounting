<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ClientTariff;
use App\Models\Tariff;
use Illuminate\Database\Seeder;

class ClientTariffSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 20;

    public function run(): void
    {
        $tariffs = Tariff::all();

        for ($i = 0; $i < self::TABLE_SEED_COUNT; $i++) {
            ClientTariff::factory()->create([
                'tariff_id' => $tariffs->random()->id,
            ]);
        }
    }
}
