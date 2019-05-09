<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUserDessert extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User_Dessert', function(Blueprint $table){
            $table->increments('id_UserDessert');    
            $table->string('foto');
            $table->string('menu');
            $table->string('label');
            $table->string('harga');      
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
        Schema::drop('User_Dessert');
    }
}
