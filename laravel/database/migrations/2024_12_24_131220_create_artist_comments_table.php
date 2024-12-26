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
        Schema::create('artist_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eser_id')->constrained('works')->onDelete('cascade');
            $table->foreignId('sanatci_id')->constrained('artists')->onDelete('cascade');
            $table->text('yorum'); // Yorum metni
            $table->timestamp('yorum_tarihi')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_comments');
    }
};
