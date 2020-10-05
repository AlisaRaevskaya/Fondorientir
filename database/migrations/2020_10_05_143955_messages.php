<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Messages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fio');
            $table->string('phone');
            $table->string('email');
            $table->longText('message');
            $table->tinyInteger('status')->default(0);
            $table->string('address')->nullable();
            $table->string('job')->nullable();
            $table->integer('userid');
            $table->integer('dateline')->default(0);
            $table->integer('comment_id')->nullable();;
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
        Schema::dropIfExists('messages');
    }
}
