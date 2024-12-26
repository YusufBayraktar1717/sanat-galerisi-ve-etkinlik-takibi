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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('muzayede_id')->constrained('auctions')->onDelete('cascade'); // Hangi müzayedeye ait olduğu
            $table->foreignId('kullanici_id')->constrained('users')->onDelete('cascade'); // Teklifi veren kullanıcı
            $table->decimal('teklif_fiyatı', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
