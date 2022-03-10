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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('customer')->nulable();
            $table->string('subject')->nulable();
            $table->string('priority')->nulable()->default("Low");
            $table->string('category')->nulable()->default("");
            $table->string('status')->nulable()->default("Active");
            $table->string('assignedto')->nulable()->default("");
            $table->string('notes')->nulable()->default("");
            $table->integer('ticketnumber')->nulable()->default(0);
            $table->decimal('timespent')->nulable()->default(0);
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
