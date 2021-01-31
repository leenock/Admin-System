<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Admission_Number')->unique();
            $table->string('passport');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('SurName');
            $table->string('Email_Address')->unique();
            $table->string('IDnumber')->unique();
            $table->string('Phone_Number')->unique();
            $table->string('DOB');
            $table->string('Gender');
            $table->string('Marital_Status');
            $table->string('Religion');
            $table->string('Alternate_Mobile');
            $table->string('Contact_Address');
            $table->string('City');
            $table->string('Country');
            $table->string('Postal_Code');
            $table->string('Next_of_KIn_fullnames');
            $table->string('Relationship');
            $table->string('Mobile');
            $table->string('Alternative_Mobile_NextKIn');
            $table->string('Course');
            $table->string('Course_Period');
            $table->string('Enrollement_Period');
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
        Schema::dropIfExists('students');
    }
}
