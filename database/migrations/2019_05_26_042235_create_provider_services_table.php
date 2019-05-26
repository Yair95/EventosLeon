<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->decimal('cost',8,2);
            $table->timestamps();
            $table->foreign('provider_id')->references('id')->on('providers')
              ->onDelete('cascade')
              ->onUpdate('cascade');
          $table->foreign('service_id')->references('id')->on('services')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_services');
    }
}
