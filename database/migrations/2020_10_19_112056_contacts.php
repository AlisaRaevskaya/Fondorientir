<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('name');
        $table->string('eng_name');
        $table->longText('inn');
        $table->integer('index');
        $table->string('city');
        $table->string('street');
        $table->string('station');
        $table->string('bus');
        $table->string('routes');
        $table->string('metro');
        $table->string('phone');
        $table->string('email');
        $table->string('web');
        $table->string('hours');
        $table->string('logo');
        $table->string('map');
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
        Schema::dropIfExists('contacts');
    }
}
