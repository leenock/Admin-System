<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_finances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Admission_Number')->unique();
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('SurName');
            $table->string('Email_Address');
            $table->string('IDnumber')->unique();
            $table->string('Phone_Number');
            $table->string('course_name');
            $table->string('course_period');
            $table->string('Enrollement_Period');
            $table->string('Course_Amount');
            $table->string('Amount_Paid');
            $table->string('Balance');
            $table->string('Fee_Status');
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
        Schema::dropIfExists('student_finances');
    }
}
