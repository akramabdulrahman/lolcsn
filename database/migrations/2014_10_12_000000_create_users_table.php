<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('avatar');
            $table->string('cover');
            $table->string('facebook_token');
            $table->integer('facebook_id')->unsigned();
            $table->string('google_token');
            $table->integer('google_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->string('email')->unique();
            $table->boolean('verified')->default(false);
            $table->boolean('busy')->default(false);
            $table->string('token')->nullable();
            $table->timestamp('last_activity')->index();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }

}
