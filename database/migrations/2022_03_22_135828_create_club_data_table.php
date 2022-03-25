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
        Schema::create('club_data', function (Blueprint $table) {
            $table->id();
            $table->integer('club_id');
            $table->string('club_email');
            $table->string('nowa');
            $table->string('an_rek');
            $table->string('mandiri');
            $table->string('bca');
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
        Schema::dropIfExists('club_data');
    }
};
