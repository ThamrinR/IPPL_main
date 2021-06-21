<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsikologTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psikolog', function (Blueprint $table) {
            $table->id();
            $table->string('nama_psikolog');
            $table->string('alamat')->nullable();
            $table->integer('no_telp')->unsigned()->nullable();
            $table->string('email')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('foto_psikolog')->nullable();
            $table->integer('biaya_konsultasi')->unsigned()->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('tipe_bank')->nullable();
            $table->foreignId('kategori_id')->constrained('kategori')->onDelete('cascade');
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
        Schema::dropIfExists('psikolog');
    }
}
