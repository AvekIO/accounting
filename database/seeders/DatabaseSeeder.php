<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(OptionSeeder::class);
        $this->call(TariffSeeder::class);
        $this->call(OptionTariffSeeder::class);
        $this->call(ClientTariffSeeder::class);
        $this->call(PaymentsSeeder::class);
    }
}
