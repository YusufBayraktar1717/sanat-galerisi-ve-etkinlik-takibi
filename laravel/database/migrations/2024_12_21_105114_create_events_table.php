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
        Schema::create('events', function (Blueprint $table) {
            $table->id();


                $table->string('ad'); //
                $table->text('aciklama')->nullable();
                $table->date('baslangic_tarihi');
                $table->date('bitis_tarihi');
                $table->time('baslangic_saati');
                $table->time('bitis_saati') ;
                $table->foreignId('konum_id')->constrained('cities');
                $table->enum('durum', ['planlanıyor', 'aktif', 'tamamlandı', 'iptal'])->default('planlanıyor');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
