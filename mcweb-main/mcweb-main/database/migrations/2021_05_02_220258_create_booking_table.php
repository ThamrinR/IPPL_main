<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->date('jadwal_psikolog')->nullable();
            $table->integer('biaya_konsultasi')->unsigned();
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
        Schema::dropIfExists('booking');
    }
}
