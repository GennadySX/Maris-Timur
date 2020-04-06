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
        Schema::table('ringlists', function (Blueprint $table) {
           $table->foreign('customer_id')->references('id')->on('customers')
               ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tariff_id')->references('id')->on('tariffs')
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
