<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 50;

    public function run(): void
    {
        Option::factory()->count(self::TABLE_SEED_COUNT)->create();
    }
}
