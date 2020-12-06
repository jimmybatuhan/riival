<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UploadStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->integer('duration')->default(0)->change();
            $table->boolean('is_playable')->default(false);
            $table->string('video_status')->default('uploading');
            $table->integer('video_update_attempt')->default(0);
            $table->integer('video_data_response_http_status')->nullable();
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
            $table->dropColumn('video_status');
            $table->dropColumn('is_playable');
            $table->dropColumn('video_update_attempt');
            $table->dropColumn('video_data_response_http_status');
        });
    }
}
