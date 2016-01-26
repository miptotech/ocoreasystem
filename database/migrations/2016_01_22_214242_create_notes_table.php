<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('var_title');
            $table->string('var_description');
            $table->string('var_category');
            $table->string('var_status');
            $table->timestamp('date_note')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('int_userid')->unsigned();
            $table->foreign('int_userid')->references('id')
                ->on('users')
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
        Schema::drop('notes');
    }
}
