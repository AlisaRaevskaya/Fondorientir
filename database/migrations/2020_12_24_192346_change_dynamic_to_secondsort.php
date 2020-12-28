<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDynamicToSecondsort extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->integer('dynamic')->nullable()->change();
            $table->renameColumn('dynamic', 'secondSort');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
          $table->integer('dynamic')->nullable()->change();
           $table->renameColumn('dynamic', 'secondSort');
        });
    }
}