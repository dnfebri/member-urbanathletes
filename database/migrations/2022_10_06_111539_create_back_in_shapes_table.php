<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('back_in_shapes', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor');
            $table->string('email')->unique();
            $table->string('alamat')->nullable();
            $table->string('kode');
            $table->string('kdRef')->nullable();
            $table->integer('club_id')->nullable();
            $table->integer('promo');
            $table->integer('harga');
            $table->integer('status')->nullable();;
            $table->string('image')->default('/default-img.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('back_in_shapes');
    }
};
