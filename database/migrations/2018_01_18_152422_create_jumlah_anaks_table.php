<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJumlahAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jumlah_anaks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode_Jumlah');
            $table->string('Jumlah_Anak');
            $table->integer('Besaran_Uang');
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
        Schema::dropIfExists('jumlah_anaks');
    }
}
