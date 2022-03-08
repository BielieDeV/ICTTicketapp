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
            $table->timestamps();
            $table->string('customer');
            $table->string('subject');
            $table->string('priority');
            $table->string('category');
            $table->string('status');
            $table->string('assignedto');
            $table->string('notes');
            $table->integer('ticketnumber')->unique();
            $table->timestamp('starttime');
            $table->timestamp('endtime');
            $table->decimal('timespent');
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
