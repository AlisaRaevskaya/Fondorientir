<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeNullableSeo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seos', function (Blueprint $table) {
           $table->string('keywords')->nullable()->change();
            $table->string('og_title')->nullable()->change();
            $table->string('og_description')->nullable()->change();
            $table->string('og_type')->nullable()->change();
            $table->string('og_url')->nullable()->change();
            $table->string('og_site_name')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seos', function (Blueprint $table) {
            //
        });
    }
}
