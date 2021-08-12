<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamePostTagTableToTaggables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_tag', function (Blueprint $table) {
            $table->dropForeign(['tag_id']);
            $table->dropColumn('tag_id');
        });

        Schema::rename('post_tag', 'taggables');

        Schema::table('taggables', function(Blueprint $table){
            $table->morphs('taggable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('taggables', function (Blueprint $table) {
            $table->dropMorphs('taggable');
        });

        Schema::rename('taggable', 'post_tag');

        Schema::disableForeignKeyConstraints();

        Schema::table('post_tag', function(Blueprint $table) {
            $table->unsignedBigInteger('tag_id');
            $table->foreign('post_id')->references('id')->on('tags')
            ->onDelete('cascade');
        });

        Schema::enableForeignKeyConstraints();
    }
}
