<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClanUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clan_user', function (Blueprint $table) {
            $table->integer('clan_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->boolean('accepted')->default(false);
            $table->primary(['clan_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clan_user');
    }
}
