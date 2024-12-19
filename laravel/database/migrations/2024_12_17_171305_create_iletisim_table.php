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
        Schema::create('iletisim', function (Blueprint $table) {
            $table->id();
            $table->string('ad_soyad',100);
            $table->string('email',100);
            $table->string('telefon',20)->nullable();
            $table->text('mesaj')->nullable();
            $table->datetime('gönderilme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('kullanıcı_id');
            $table->foreign('kullanıcı_id')->references('id')->on('kullanıcılar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('iletisim');
    }
};
