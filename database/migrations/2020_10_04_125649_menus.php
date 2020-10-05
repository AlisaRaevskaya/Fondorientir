<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Menus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::create('menus', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->integer('parent_id')->unsigned()->nullable()->index();
        $table->string('title');
        $table->string('laravel_name')->nullable();;
        $table->string('url');
        $table->tinyInteger('sort_order')->default(0);
        $table->boolean('published')->default(true);
        $table->timestamp('created_at')->nullable();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
