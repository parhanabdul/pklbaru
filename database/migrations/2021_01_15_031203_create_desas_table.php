<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsIgnedInteger('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id')
            ->on('kecamatans')->onDelete('cascade');
            $table->string('kode_desa');
            $table->string('nama_desa');
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
        Schema::dropIfExists('desas');
    }
}
