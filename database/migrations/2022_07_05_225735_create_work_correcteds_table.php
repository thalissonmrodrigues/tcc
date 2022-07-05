<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkCorrectedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_correcteds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_sent_id')->constrained('work_sents');
            $table->float('score');
            $table->string('corrected_files');
            $table->text('teacher_comment');
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
        Schema::dropIfExists('work_correcteds');
    }
}
