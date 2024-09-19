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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('tripe_id')->constrained('trips')->onDelete('cascade');
            $table->string('flightnumber');
            $table->string('airline');
            $table->dateTime('departuredateandtime');
            $table->dateTime('arrivaldateandtime');
            $table->string('departureairport');
            $table->string('flightduration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
