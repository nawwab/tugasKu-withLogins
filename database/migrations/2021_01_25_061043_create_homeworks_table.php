<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeworks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('subject', 50);
            $table->string('abbrev', 10)->nullable();
            $table->string('source', 240)->nullable();
            $table->string('deadline_date');
            $table->string('deadline_time')->nullable();
            $table->string('group', 3)->nullable();
            $table->string('file_attachments', 100)->nullable();
            $table->string('details', 240)->nullable();
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
        Schema::dropIfExists('homeworks');
    }
}
