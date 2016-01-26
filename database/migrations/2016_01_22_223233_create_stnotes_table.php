<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStnotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stnotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('var_description');
            $table->timestamp('date_stnote')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('int_stid')->unsigned();
            $table->foreign('int_stid')->references('id')
                ->on('st')
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
        Schema::drop('stnotes');
    }
}
