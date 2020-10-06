<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Replies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->longtext('body');
            $table->integer('dateline')->default(0);
            $table->foreignId('messages_id')->default(0);
            $table->timestamps();
        });
        // Schema::table('replies', function (Blueprint $table){
        //     $table->unsignedBigInteger('user_id')->default(0);
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replies');
    }
}
