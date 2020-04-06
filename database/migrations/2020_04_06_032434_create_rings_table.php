<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rings', function (Blueprint $table) {
            $table->id();
            $table->integer('tariff_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->string('Number');
            $table->boolean('RingType')->default(true);
            $table->timestamp('dateRing')->nullable();
            $table->string('Country')->nullable();
            $table->string('Town')->nullable();
            $table->integer('Value')->default(1);
            $table->float('Sum')->default(1);
            $table->text('Comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rings');
    }
}
