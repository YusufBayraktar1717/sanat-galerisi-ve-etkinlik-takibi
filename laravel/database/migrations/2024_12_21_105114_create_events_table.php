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
                $table->datetime('baslangic_tarihi');
                $table->datetime('bitis_tarihi');
                $table->foreignId('konum_id')->constrained('cities');
                $table->foreignId('kategori_id')->constrained('event_categories');
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
