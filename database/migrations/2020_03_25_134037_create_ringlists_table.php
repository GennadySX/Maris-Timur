<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRinglistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ringlists', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->integer('tariff_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('ring_minute');
            $table->boolean('type')->default(true);
            $table->dateTime('date_ring')->default(\Carbon\Carbon::now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ringlists');
    }
}
