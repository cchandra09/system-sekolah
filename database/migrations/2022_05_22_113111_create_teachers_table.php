<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('id_card');
            $table->string('nip'. 30)->nullable();
            $table->string('teacher_name', 50);
            $table->tinyinteger('course_id');
            $table->string('code', 5)->nullable();
            $table->enum('gender', ['Male', 'Female']);
            $table->string('no_phone', 16)->nullable();
            $table->string('place_of_birth', 50)->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('path_photo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
