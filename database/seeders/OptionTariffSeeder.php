<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Option;
use App\Models\OptionTariff;
use App\Models\Tariff;
use Illuminate\Database\Seeder;

class OptionTariffSeeder extends Seeder
{
    public function run(): void
    {
        $tariffs = Tariff::all();
        $options = Option::all();

        foreach ($tariffs as $tariff) {
            foreach ($options as $option) {
                OptionTariff::factory()->create([
                    'option_id' => $option->id,
                    'tariff_id' => $tariff->id,
                ]);
            }
        }
    }
}
