<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrectedWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corrected_works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_sent_id')->constrained('work_sents');
            $table->float('score');
            $table->string('corrected_files');
            $table->text('teacher_comment');
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
        Schema::dropIfExists('corrected_works');
    }
}
