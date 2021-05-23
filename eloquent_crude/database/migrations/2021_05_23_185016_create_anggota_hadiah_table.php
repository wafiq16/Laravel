<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaHadiahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_hadiah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('anggota_id');
            $table->string('hadiah_id');
            // $table->integer('article_id');
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
        Schema::dropIfExists('anggota_hadiah');
    }
}
