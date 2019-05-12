<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableHistoryList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_list', function (Blueprint $table) {
            $table->increments('id_historyList');
            $table->integer('history_id');
            $table->integer('menu_id');
            $table->integer('jumlah');
            $table->text('note');
            $table->double('total',8, 2);
            $table->integer('status');
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
        //
    }
}
