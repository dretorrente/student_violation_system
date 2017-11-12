<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('offenses');

        Schema::create('offenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->date('date_commit');
            $table->string('persons_involve');
            $table->integer('violation_id');
            $table->string('offense_number_attempt');
            $table->string('student_offense');
            $table->string('sanction');
            $table->string('description');
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