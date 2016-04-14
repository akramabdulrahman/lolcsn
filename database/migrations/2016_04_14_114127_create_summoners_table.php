<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummonersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('summoners', function (Blueprint $table) {
            $table->increments('id');
            $table->text('summoner_name');
            $table->integer('summonerLevel');
            $table->integer('profileIconId');
            $table->string('riot_id');
            $table->integer('server_id')->unsigned();
            $table->integer('league_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('verified')->default(false);
            $table->string('token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('summoners');
    }

}
