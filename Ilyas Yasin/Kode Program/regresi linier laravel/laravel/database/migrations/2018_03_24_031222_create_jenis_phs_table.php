<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJenisPhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_phs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('tanggal')->nullable();
            $table->string('jenis_tanaman')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jenis_phs');
    }
}
