<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            // The "users" table exists...
        } else{
        Schema::create('users', function (Blueprint $table) {
            $table->primary('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('interrest');
            $table->string('geoloc');
            $table->timestamps();   
        });
    }
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
