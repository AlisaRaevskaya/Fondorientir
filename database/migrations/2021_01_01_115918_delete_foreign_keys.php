<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('comments', function (Blueprint $table) {
        //     $table->renameColumn('topic_reply_id','comments_topic_reply_id');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //    Schema::table('comments', function (Blueprint $table) {
        //     $table->dropForeign(['topic_reply_id']);
        // });
        //   Schema::table('comment_reply', function (Blueprint $table) {
        //     $table->dropForeign(['reply_id']);
        // });

    }
}