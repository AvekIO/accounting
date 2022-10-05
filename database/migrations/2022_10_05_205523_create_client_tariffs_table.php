<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('client_tariff', function (Blueprint $table): void {
            $table->unsignedMediumInteger('id', true);
            $table->unsignedMediumInteger('client_id');
            $table->unsignedSmallInteger('tariff_id');
            $table->timestamp('expired_at');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('tariff_id')->references('id')->on('tariffs');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_tariff');
    }
};
