<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTourTables extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function($t) {
                        $t->increments('id');
                        $t->string('titulo');
                        $t->string('slug');
                        $t->boolean('main');
                        $t->integer('wrh_id');
                        $t->timestamps();
                    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tours');
    }

}
