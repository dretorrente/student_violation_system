<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViolationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('violations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('violation');
            $table->string('category');
            $table->string('1st_sanction')->nullable();;
            $table->string('2nd_sanction')->nullable();;
            $table->string('3rd_sanction')->nullable();;
            $table->string('4th_sanction')->nullable();;
            $table->string('5th_sanction')->nullable();;
            $table->string('6th_sanction')->nullable();;
            $table->string('7th_sanction')->nullable();;
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
        //
    }
}
