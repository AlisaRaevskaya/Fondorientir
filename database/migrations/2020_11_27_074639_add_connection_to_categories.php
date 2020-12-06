<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConnectionToCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('messages', function (Blueprint $table) {
        //     $table->unsignedBigInteger('category_id');
        //     // $table->renameColumn('fio', 'name');
        // });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // $table->unsignedBigInteger('category_id');
        // $table->renameColumn('fio', 'name');
    }
}
