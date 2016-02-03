<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('st', function (Blueprint $table) {
            $table->increments('id');
            $table->string('var_mobile');
            $table->string('var_telephone');
            $table->string('var_email')->unique();
            $table->string('var_address');
            $table->string('var_invoiceci');
            $table->string('var_located');
            $table->string('var_typequipment');
            $table->string('var_model');
            $table->string('var_brand');
            $table->string('var_serial');
            $table->string('var_accessory');
            $table->string('var_user');
            $table->string('var_key');
            $table->string('var_workshopaddr');
            $table->timestamp('date_start');
            $table->timestamp('date_end');
            $table->string('var_status');
            $table->string('var_code');
            $table->string('var_flaw');
            $table->string('var_inform');
            $table->float('int_advance');
            $table->float('int_replace');
            $table->float('int_handwork');
            $table->integer('int_userid')->unsigned();
            $table->foreign('int_userid')->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('int_flawcategoryid')->unsigned();
            $table->foreign('int_flawcategoryid')->references('id')
                ->on('flawcategories')
                ->onDelete('cascade');
            $table->integer('int_clientid')->unsigned();
            $table->foreign('int_clientid')->references('id')
                ->on('clients')
                ->onDelete('cascade');
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
        Schema::drop('st');
    }
}
