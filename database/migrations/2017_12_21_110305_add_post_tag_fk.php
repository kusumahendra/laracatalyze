<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostTagFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_tag', function (Blueprint $table) {
            $table->foreign('post_id')
                ->references('id')->on('posts')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreign('tag_id')
                ->references('id')->on('tags')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_tag', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
            $table->dropForeign(['tag_id']);
        });
    }
}
