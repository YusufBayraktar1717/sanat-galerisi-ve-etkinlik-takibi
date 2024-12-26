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
        Schema::create('past__events', function (Blueprint $table) {
            $table->id();
            $table->string('etkinlik_Adi');
            $table->text('etkinlik_aciklama');
            $table->dateTime('baslangic_Tarihi');
            $table->dateTime('bitis_Tarihi');
            $table->foreignId('etkinlik_Yeri_id')->constrained('cities');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('past__events');
    }
};
