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
        Schema::create('exhibitions', function (Blueprint $table) {
            $table->id();
            $table->string('sergi_adi',50);
            $table->text('sergi_aciklama');
            $table->datetime('baslangıc_tarihi');
            $table->datetime('bitis_tarihi');
            $table->foreignId('sergi_yer_id')->constrained('cities');
            $table->enum('durum',['Sergileniyor','Sergilenmiyor'])->default('Sergilenmiyor');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibitions');
    }
};
