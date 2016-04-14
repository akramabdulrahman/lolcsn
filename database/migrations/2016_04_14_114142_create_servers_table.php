<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('servers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('server_name');//full server name 
            $table->string('acro');//abbrviation
            $table->string('platformId');//eune_1 thing
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('servers');
    }

}
