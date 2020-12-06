<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoIdOnLessons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropColumn('duration');
            $table->dropColumn('video_link');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->string('video_id')->nullable(false);
            $table->integer('duration')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropColumn('video_id');
            $table->dropColumn('duration');
        });
        Schema::table('lessons', function (Blueprint $table) {
            $table->string('duration');
            $table->string('video_link');
        });
    }
}
