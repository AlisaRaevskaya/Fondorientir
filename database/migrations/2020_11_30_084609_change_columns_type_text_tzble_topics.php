<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsTypeTextTzbleTopics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topics', function (Blueprint $table) {
            $table->string('title')->change();
            $table->string('intro')->nullable()->change();
            $table->dropColumn('dateedit');
            $table->dropColumn('status');
            $table->string('name')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topics', function (Blueprint $table) {
            $table->string('title')->change();
            $table->string('intro')->nullable()->change();
            $table->dropColumn('dateedit');
            $table->dropColumn('status');
            $table->string('name')->nullable()->change();
        });
    }
}
