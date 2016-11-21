<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticeTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('notice_id')->unsigned();
            $table->foreign('notice_id')->references('id')->on('notices');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notice_tag');
    }
}
