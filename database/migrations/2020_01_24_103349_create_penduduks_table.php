<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_urut', 100);
            $table->string('blok', 100);
            $table->string('nama_penduduk', 100);
            $table->string('nik', 100);
            $table->string('tempat_lahir', 100);
            $table->string('tanggal_lahir', 100);
            $table->string('umur', 100);
            $table->string('agama', 100);
            $table->string('pekerjaan', 100);
            $table->string('alamat', 250);
            $table->string('dt_nama', 100);
            $table->string('luas', 100);
            $table->string('no_sppt', 100);
            $table->string('sppt', 100);
            $table->string('nama_sppt', 100);
            $table->string('sta_tanah', 100);
            $table->string('peng_tanah', 100);
            $table->string('letak_tanah', 100);
            $table->string('perolehan', 100);
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
        Schema::dropIfExists('penduduks');
    }
}