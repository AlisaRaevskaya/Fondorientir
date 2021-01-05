<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS=0');
       Schema::dropIfExists('comments');
       Schema::dropIfExists('comment_reply');
       Schema::dropIfExists('previous_projects');
        Schema::dropIfExists('replies');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
       Schema::dropIfExists('comments');
       Schema::dropIfExists('comment_reply');
       Schema::dropIfExists('previous_projects');
        Schema::dropIfExists('replies');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
