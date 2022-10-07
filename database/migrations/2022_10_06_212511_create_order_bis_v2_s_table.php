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
        Schema::create('order_bis_v2_s', function (Blueprint $table) {
            $table->id();
            $table->string('order_name')->nullable();
            $table->string('order_id');
            $table->string('gross_amount');
            $table->string('status');
            $table->string('transaction_id');
            $table->string('payment_type');
            $table->text('json_midtrans');
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
        Schema::dropIfExists('order_bis_v2_s');
    }
};
