<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUserMakanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User_Makanan', function(Blueprint $table){
            $table->increments('id_UserMakanan');    
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
        Schema::drop('User_Makanan');
    }
}
