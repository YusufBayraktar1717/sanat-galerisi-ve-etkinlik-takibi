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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('eser_isim',50);
            $table->dateTime('yapilidigi_yil')->nullable();
            $table->foreignId('kategori_id')->constrained('categories');
            $table->foreignId('eser_gorseli_id')->constrained('work_images');
            $table->foreignId('sergilendigi_yer_id')->constrained('cities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
