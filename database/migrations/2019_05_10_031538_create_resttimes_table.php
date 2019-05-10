<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResttimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resttimes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('start_time');
            $table->integer('end_time');
            $table->unsignedBigInteger('staff_id');
            $table->timestamps();

            $table->foreign('staff_id')
            ->references('id')->on('staffs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resttimes');
    }
}
