<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('notifyable');
            $table->integer('user_id')->unsigned();
            $table->integer('other_user_id')->unsigned(); //other user id 

            $table->index('user_id'); //the target user
            $table->index('other_user_id'); //other user id 

            $table->index('notifyable_id');
            $table->index('notifyable_type');
            $table->integer('notification_type_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('notifications');
    }

}
