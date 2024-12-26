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
        Schema::create('artist__events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etkinlik_id')->constrained('events')->onDelete('cascade'); // Etkinlik ile ilişki
            $table->foreignId('sanatci_id')->constrained('artists')->onDelete('cascade'); // Sanatçı ile ilişki
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist__events');
    }
};
