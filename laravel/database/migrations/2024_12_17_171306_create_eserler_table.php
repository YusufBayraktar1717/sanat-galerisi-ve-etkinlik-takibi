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
        Schema::create('eserler', function (Blueprint $table) {
            $table->id();
            $table->string('eser_isim', 50)->nullable();
            $table->unsignedBigInteger('sanatci_id')->nullable();
            $table->dateTime('yapildigi_yil')->nullable();
            $table->unsignedBigInteger('sergilendigi_yer_id')->nullable();
            $table->enum('durumu', ['bakımda', 'depoda', 'sergileniyor'])->nullable();
            $table->unsignedBigInteger('eser_türü_id')->nullable();
            $table->foreign('eser_turu_id')->references('id')->on('eser_kategori');
            $table->foreign('sanatci_id')->references('id')->on('sanatçılar');
            $table->foreign('sergilendigi_yer_id')->references('id')->on('sergiler');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('eserler');
    }
};
