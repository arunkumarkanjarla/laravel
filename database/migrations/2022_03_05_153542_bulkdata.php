<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bulkdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::create('bulkdata', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('email');
            $table->string('class');
            $table->string('age');
            $table->string('section');
            $table->string('date_of_birth');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('date_of_join');
            $table->string('phone');
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
        Schema::dropIfExists('bulkdata');
    }
}
