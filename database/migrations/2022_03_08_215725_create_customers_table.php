<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('customers', function (Blueprint $table) {
          $table->id();
          $table->timestamp('updated_at');
          $table->timestamp('created_at');
          $table->string('firstname');
          $table->string('lastname');
          $table->string('email')->unique();
          $table->integer('custnumber')->unique();
          $table->string('cellnumber');
          $table->boolean('SLA')->default('0');
          $table->longText('notes');
          $table->string('Status');
          $table->decimal('balance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
