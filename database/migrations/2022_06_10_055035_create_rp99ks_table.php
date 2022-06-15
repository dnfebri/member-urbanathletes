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
        Schema::create('rp99ks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->string('kode');
            $table->integer('club_id')->nullable();
            $table->integer('harga');
            $table->date('tanggal')->nullable();
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
        Schema::dropIfExists('rp99ks');
    }
};
