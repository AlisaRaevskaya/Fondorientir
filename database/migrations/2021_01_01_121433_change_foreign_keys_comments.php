<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeForeignKeysComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //     Schema::table('comments', function (Blueprint $table) {
        //     $table->dropForeign('comments_topic_reply_id');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { DB::statement('SET FOREIGN_KEY_CHECKS=0');
           Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('comments_topic_reply_id');

        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
