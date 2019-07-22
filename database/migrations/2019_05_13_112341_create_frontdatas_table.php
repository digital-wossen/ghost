<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontdatas', function (Blueprint $table2) {
            $table2->bigIncrements('id');
            $table2->string('title');
            $table2->string('caption1');
            $table2->string('caption2');
            $table2->string('caption3');
            $table2->mediumText('capline1');
            $table2->mediumText('capline2');
            $table2->mediumText('capline3');
            $table2->string('t1');
            $table2->string('t2');
            $table2->string('t3');
            $table2->mediumText('content1');
            $table2->mediumText('content2');
            $table2->mediumText('content3');


            $table2->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontdatas');
    }
}
