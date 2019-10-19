<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_packages', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('cart_id')->unsigned()->nullable();

            $table->string('vCpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('disk')->nullable();
            $table->string('transfer_limit')->nullable();

            $table->string('extra_storage_space')->nullable();
            $table->integer('extra_storage_price')->nullable();

            $table->integer('package_price')->nullable();
            


            
            $table->integer('total_price')->nullable();
            $table->string('os_type')->nullable(); //['widnows','linux']
            $table->string('subsucription_type')->nullable(); // ['yearly','monthly']

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
        Schema::dropIfExists('cart_packages');
    }
}
