<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table): void {
            $table->id();
            $table->unsignedMediumInteger('client_tariff_id');
            $table->unsignedMediumInteger('price');
            $table->json('data');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('client_tariff_id')->references('id')->on('client_tariff');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
