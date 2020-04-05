<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Specifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('specifications', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->unsignedInteger('wine_id');//relation with wines table
           $table->string('slug');
           $table->string('region');
           $table->string('brand');
           $table->string('color');
           $table->string('age');
           $table->string('sugar');
           $table->string('alevel');// alcohol level number and ° added  before insert
           $table->string('img');
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
        Schema::dropIfExists('specifications');
    }
}
