<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->integer('userid')->default(0);
            $table->integer('dateline');
            $table->string('title')->nullable();
            $table->longText('intro')->nullable();
            $table->longText('body');
            $table->string('image')->nullable();
            $table->string('source_name')->nullable();
            $table->longtext('source_link')->nullable();
            $table->timestamps();
        });

        Schema::table('news', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->default(1);
            $table->foreign('category_id')->references('id')->on('categories');
        });
}
    /**foreign('user_id')->references('id')->on('users');
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
