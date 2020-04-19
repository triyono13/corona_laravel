<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corona', function (Blueprint $table) {
            $table->id('FID');
            $table->integer('kode_provinsi');
            $table->string('provinsi');
            $table->integer('kasus_positif')->default(0);
            $table->integer('sembuh')->default(0);
            $table->integer('meninggal')->default(0);
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
        Schema::dropIfExists('corona');
    }
}
