<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->string('S1_header');
            $table->text('S1_paragraph');
            $table->string('S1_icon');
            $table->string('S2_header');
            $table->text('S2_paragraph');
            $table->string('S2_icon');
            $table->string('S3_header');
            $table->text('S3_paragraph');
            $table->string('S3_icon');
            $table->string('S4_header');
            $table->text('S4_paragraph');
            $table->string('S4_icon');
            $table->string('S5_header');
            $table->text('S5_paragraph');
            $table->string('S5_icon');
            $table->string('S6_header');
            $table->text('S6_paragraph');
            $table->string('S6_icon');
            $table->string('S7_header');
            $table->text('S7_paragraph');
            $table->string('S7_icon');
            $table->string('S8_header');
            $table->text('S8_paragraph');
            $table->string('S8_icon');

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
        Schema::dropIfExists('features');
    }
}
