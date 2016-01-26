<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('var_name');
            $table->string('var_telephone');
            $table->string('var_email')->unique();
            $table->string('var_address');
            $table->string('var_mobile');
            $table->integer('int_clientforce');
            $table->integer('int_nosurvey');
            $table->integer('int_noffert');
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
        Schema::drop('clients');
    }
}
