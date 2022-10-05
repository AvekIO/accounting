<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('option_tariff', function (Blueprint $table): void {
            $table->unsignedSmallInteger('tariff_id');
            $table->unsignedSmallInteger('option_id');
            $table->timestamp('created_at')->useCurrent();

            $table->primary(['tariff_id', 'option_id']);
            $table->foreign('tariff_id')->references('id')->on('tariffs');
            $table->foreign('option_id')->references('id')->on('options');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('option_tariff');
    }
};
