<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('device_id')->unsigned();
            $table->string('MapPhone')->nullable();
            $table->string('DateMap')->nullable();
            $table->float('MapCount')->nullable();
            $table->string('Account')->nullable();
            $table->string('Bank')->nullable();
            $table->string('PhoneAddress')->nullable();
            $table->float('Value')->nullable();
            $table->string('ExemptType')->nullable();
            $table->float('Exempt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipts');
    }
}
