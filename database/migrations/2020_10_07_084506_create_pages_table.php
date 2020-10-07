<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('laravel_name')->nullable();;
            $table->string('title');//— название страницы в окне браузера (VARCHAR, 255);
            $table->string('metakey')->nullable();;
            $table->string('metadesc')->nullable();;
            $table->string('h1')->nullable();;//заголовок страницы (VARCHAR, 255);
            $table->longText('content');//основной текст страницы, который будет выводиться в центральную колонку сайта (TEXT);
            $table->integer('desc')->default(0);
            $table->foreignId('menu_id')->nullable();;
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
        Schema::dropIfExists('pages');
    }
}
