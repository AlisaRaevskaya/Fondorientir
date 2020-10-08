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
            $table->string('eng-name');
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
            $table->string('map');
            $table->timestamps();
        });
    }
    // Schema::table('contacts', function(Blueprint $table){
    //     $table->string('vk')->nullable();
    //     $table->string('fb')->nullable();
    //     $table->string('fb')->nullable();
    //     $table->string('fb')->nullable();
    // });
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
