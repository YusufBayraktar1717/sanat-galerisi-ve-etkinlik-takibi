<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('biletler', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etkinlik_id');
            $table->unsignedBigInteger('kullanici_id');
            $table->datetime('satıs_tarihi');
            $table->decimal('bilet_fiyat',10,2);
            $table->unsignedBigInteger('ödeme_turu_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('biletler');
    }
};
