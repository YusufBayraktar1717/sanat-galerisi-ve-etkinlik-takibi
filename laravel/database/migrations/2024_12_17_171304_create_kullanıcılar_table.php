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
        Schema::create('kullanıcılar', function (Blueprint $table) {
            $table->id();
            $table->string('kullanici_adi',50)->nullable();
            $table->unsignedBigInteger('rol_id');
            $table->string('sifre');
            $table->string('email',100);
            $table->string('telefon',15)->nullable();
            $table->string('profil_Resmi',255)->nullable();
            $table->foreign('rol_id')->references('id')->on('rol');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('kullanıcılar');
    }
};
