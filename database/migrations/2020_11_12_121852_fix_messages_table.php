<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('messages', function (Blueprint $table){
            $table->text('message')->nullable()->change();
        });
         Schema::table('contacts', function (Blueprint $table){
            $table->string('inn')->change();
        });
         Schema::table('news', function (Blueprint $table){
            $table->text('intro')->nullable()->change();
            $table->mediumtext('body')->nullable()->change();
            $table->string('source_link')->nullable()->change();
        });
         Schema::table('projects', function (Blueprint $table){
            $table->text('results')->change();
            $table->text('name')->change();
        });
         Schema::table('previous_projects', function (Blueprint $table){
            $table->string('contractor')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
