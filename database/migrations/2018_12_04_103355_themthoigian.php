<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Themthoigian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('customer', function (Blueprint $table) {
            $table->timestamps();
        });*/
        Schema::table('deal', function (Blueprint $table) {
            $table->timestamps();
        });
        /*Schema::table('deal_detail', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('department', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('item', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('item_detail', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('item_file', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('item_owned', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('item_ware', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('staff', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('warehouse', function (Blueprint $table) {
            $table->timestamps();
        });*/


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer', function (Blueprint $table) {
            //
        });
    }
}
