<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTourItemsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('tour_items', function($t) {
                      $t->increments('id');
                      $t->string('titulo');
                      $t->text('texto');
                      $t->text('saiba_mais');
                      $t->integer('tour_id');
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
        Schema::drop('tour_items');
    }

}
