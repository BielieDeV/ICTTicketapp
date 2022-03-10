<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->timestamps('created_at')->nulable();
            $table->timestamps('updated_at')->nulable();
            $table->string('customer')->nulable();
            $table->string('subject')->nulable();
            $table->string('priority')->nulable();
            $table->string('category')->nulable();
            $table->string('status')->nulable()->default("Active");
            $table->string('assignedto')->nulable();
            $table->string('notes')->nulable();
            $table->integer('ticketnumber')->nulable();
            $table->timestamp('starttime')->nulable();
            $table->timestamp('endtime')->nulable();
            $table->decimal('timespent')->nulable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
}
