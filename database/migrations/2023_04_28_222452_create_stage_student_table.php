<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stage_id');
            $table->unsignedBigInteger('student_id');
            $table->timestamps();
            $table->softDeletes();

            $table->primary(['stage_id', 'student_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage_student');
    }
};
