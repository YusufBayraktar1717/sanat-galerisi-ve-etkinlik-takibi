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
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->text('açıklama')->nullable();
            $table->foreignId('eser_id')->constrained('works');
            $table->decimal('başlangıç_fiyatı', 10, 2);
            $table->decimal('anlık_fiyat', 10, 2)->nullable();
            $table->foreignId('kazanan_id')->constrained('users');
            $table->dateTime('başlangıç_tarihi');
            $table->dateTime('bitiş_tarihi');
            $table->enum('durum', ['planlanıyor', 'devam ediyor', 'tamamlandı', 'iptal'])->default('planlanıyor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auctions');
    }
};
