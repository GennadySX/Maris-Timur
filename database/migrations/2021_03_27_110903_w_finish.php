<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WFinish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
           $table->foreign('customer_id')->references('id')->on('users')
               ->onDelete('cascade')->onUpdate('cascade');
        });


        Schema::table('repairs', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('receipts', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('device_id')->references('id')->on('devices')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('rings', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('device_id')->references('id')->on('devices')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('devices', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')
                ->onDelete('cascade')->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
