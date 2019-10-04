<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('order')->nullable();
            
            $table->string('vCpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('disk')->nullable();
            $table->string('transfer_limit')->nullable();

            $table->string('linux_price_per_month')->nullable();
            $table->string('windows_price_per_month')->nullable();

            $table->string('linux_price_per_year')->nullable();
            $table->string('windows_price_per_year')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
