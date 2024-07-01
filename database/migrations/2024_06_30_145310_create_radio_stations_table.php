<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('radio_stations', function (Blueprint $table) {
            $table->id();
            $table->string('stationuuid');
            $table->string('name');
            $table->string('favicon');
            $table->string('state');
            $table->string('votes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('radio_stations');
    }
};
