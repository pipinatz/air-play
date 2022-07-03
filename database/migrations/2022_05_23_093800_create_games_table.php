<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->text('title');
            $table->string('category');
            $table->string('platform');
            $table->text('description');
            $table->string('minimumOS');
            $table->string('minimumMemory');
            $table->string('minimumProcessor');
            $table->string('minimumGraphic');
            $table->string('minimumStorage');
            $table->string('recommendedOS');
            $table->string('recommendedMemory');
            $table->string('recommendedProcessor');
            $table->string('recommendedGraphic');
            $table->string('recommendedStorage');
            $table->string('game');
            $table->string('image');
            $table->string('excerpt');
            $table->date('date_created');
            $table->date('date_updated');
            $table->foreign('member_id')->references('id')->on('members')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
