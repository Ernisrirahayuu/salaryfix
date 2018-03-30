<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggajianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Penggajian', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('Kode_Tunjangan');
            $table->foreign('Kode_Tunjangan')->references('id')
                  ->on('Tunjangan')->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->integer('Jumlah_jam_lembur');
            $table->integer('Jumlah_uang_lembur');
            $table->integer('Gaji_pokok');
            $table->integer('Total_gaji');
            $table->string('Tanggal_pengambilan');
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
        Schema::dropIfExists('Penggajian');
    }
}
