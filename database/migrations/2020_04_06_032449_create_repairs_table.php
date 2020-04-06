<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('device_id')->unsigned();
            $table->dateTime('DateClaim')->default(\Carbon\Carbon::now())->nullable();
            $table->integer('NumberClaim')->nullable();
            $table->string('Inspector')->nullable();
            $table->dateTime('DateRepair')->default(\Carbon\Carbon::tomorrow())->nullable();
            $table->float('Compensation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repairs');
    }
}
