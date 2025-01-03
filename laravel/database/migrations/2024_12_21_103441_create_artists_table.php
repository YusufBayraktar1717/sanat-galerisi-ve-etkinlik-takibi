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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->longText('biyografi');
            $table->datetime('dogum_tarihi');
            $table->datetime('olum_tarihi')->nullable();
            $table->string('milliyet',50);
            $table->datetime('kayit_guncelleme_tarihi');
            $table->string('foto_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
