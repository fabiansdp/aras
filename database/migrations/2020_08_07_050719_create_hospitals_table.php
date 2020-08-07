<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('rs');
            $table->string('alamat');
            $table->string('daerah');
            $table->bigInteger('ruang_vip');
            $table->bigInteger('kelas_1');
            $table->bigInteger('kelas_2');
            $table->bigInteger('kelas_3');
            $table->bigInteger('kelas_covid');
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
        Schema::dropIfExists('hospitals');
    }
}
