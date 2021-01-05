<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteDatelines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('topics', function (Blueprint $table) {
              $table->dropColumn('dateline');
        });
          Schema::table('messages', function (Blueprint $table) {
              $table->dropColumn('dateline');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {  Schema::table('topics', function (Blueprint $table) {
              $table->dropColumn('dateline');
        });
          Schema::table('messages', function (Blueprint $table) {
              $table->dropColumn('dateline');
        });
    }
}