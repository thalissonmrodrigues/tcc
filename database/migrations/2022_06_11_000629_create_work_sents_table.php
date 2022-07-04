<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkSentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_sents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_id')->constrained('works');
            $table->foreignId('student_id')->constrained('students');
            $table->text('student_comment');
            $table->string('files');
            $table->string('status');
            $table->integer('corrected_work_id')->nullable();
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
        Schema::dropIfExists('work_sents');
    }
}
