<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('students');

        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('sy_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->integer('age');
            $table->enum('gender',array(1,2));
            $table->string('adviser');
            $table->string('section_id');
            $table->string('address');
            $table->enum('group_id',array(1,2,3));
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
