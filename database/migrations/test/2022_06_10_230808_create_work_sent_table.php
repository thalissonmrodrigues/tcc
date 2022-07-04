<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkSentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_sent', function (Blueprint $table) {
            $table->id();
            $table->integer('work_id');
            $table->integer('student_id');
            $table->text('student_comment');
            $table->string('files');
            $table->string('status');
            $table->integer('corrected_work_id');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_sent');
    }
}
