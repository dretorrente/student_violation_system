<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffenseRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('offense_records');
        
        Schema::create('offense_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->dateTime('date_commit');
            $table->integer('category_id');
            $table->integer('offense_id');
            $table->rememberToken();
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
