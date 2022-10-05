<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ClientTariff;
use App\Models\Payments;
use Illuminate\Database\Seeder;

class PaymentsSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 2000;

    public function run(): void
    {
        $clientTariffs = ClientTariff::all();

        for ($i = 0; $i < self::TABLE_SEED_COUNT; $i++) {
            Payments::factory()->create([
                'client_tariff_id' => $clientTariffs->random()->id,
            ]);
        }
    }
}
