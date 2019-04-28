<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserHistoryPesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User_HistoryPesanan', function(Blueprint $table){
            $table->increments('id_HistoryPesanan');   
            $table->integer('id_History');    
            $table->string('menu');
            $table->text('note');
            $table->integer('status');
            $table->integer('jumlah');
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
        Schema::drop('User_HistoryPesanan');
    }
}
