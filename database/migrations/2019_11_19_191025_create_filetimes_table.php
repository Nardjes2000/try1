<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiletimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filetimes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('filename');
            $table->string('filechemin');
            $table->string('fileniveau');
             $table->string('filegroupe');
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
        Schema::dropIfExists('filetimes');
    }
}
