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
        Schema::create('sergiler', function (Blueprint $table) {
            $table->id();
            $table->string('sergi_adi',50)->nullable();
            $table->string('sergi_aciklama',100)->nullable();
            $table->datetime('baslangic_tarihi')->nullable();
            $table->datetime('bitis_tarihi')->nullable();
            $table->unsignedBigInteger('sergi_yer_id')->nullable();
            $table->enum('durum', ['Geçmiş', 'Gelecek'])->default('Gelecek');
            $table->foreign('sergi_yer_id')->references('id')->on('sehirler');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('sergiler');
    }
};
