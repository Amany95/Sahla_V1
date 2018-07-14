<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app__services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('header');
            $table->string('P1_header');
            $table->text('P1_paragraph');
            $table->string('P2_header');
            $table->text('P2_paragraph');
            $table->string('P3_header');
            $table->text('P3_paragraph');
            $table->string('P4_header');
            $table->text('P4_paragraph');
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
        Schema::dropIfExists('app__services');
    }
}
