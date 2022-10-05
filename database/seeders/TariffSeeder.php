<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Tariff;
use Illuminate\Database\Seeder;

class TariffSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 20;

    public function run(): void
    {
        Tariff::factory()->count(self::TABLE_SEED_COUNT)->create();
    }
}
