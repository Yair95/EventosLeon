<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',128);
            $table->string('last_name',128);
            $table->smallInteger('phone1')->unsigned();
            $table->smallInteger('phone2')->unsigned()->nullable();
            $table->string('email',128)->nullable();
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
        Schema::dropIfExists('data_contacts');
    }
}
