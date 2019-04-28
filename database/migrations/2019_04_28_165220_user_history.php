<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User_History', function(Blueprint $table){
            $table->increments('id_History');    
            $table->integer('id_pelanggan');
            $table->time('login');
            $table->integer('meja');
            $table->integer('status');
            $table->double('total');     
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
        Schema::drop('User_History');
    }
}
