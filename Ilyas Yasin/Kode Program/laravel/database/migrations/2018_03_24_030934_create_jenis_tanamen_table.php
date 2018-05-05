<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJenisTanamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_tanamen', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('jenis_tanaman')->nullable();
            $table->integer('jmlh_ppm')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jenis_tanamen');
    }
}
