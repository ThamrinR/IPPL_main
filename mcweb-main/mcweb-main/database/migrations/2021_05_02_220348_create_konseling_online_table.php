<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonselingOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konseling_online', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_konsultasi')->nullable();
            $table->string('bukti_pembayaran');
            $table->foreignId('psikolog_id') ->constrained('psikolog') ->onDelete('cascade');
            $table->foreignId('user_id') ->constrained('users') ->onDelete('cascade');
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
        Schema::dropIfExists('konseling_online');
    }
}
