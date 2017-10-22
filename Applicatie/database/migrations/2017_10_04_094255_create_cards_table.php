<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
	        $table->string('image')->nullable()->default(null);
            $table->unsignedInteger('FK_game');
            $table->unsignedInteger('FK_categorie')->nullable()->default(null);
            $table->boolean('approved')->default(0);
            $table->timestamps();

            $table->foreign('FK_game')->references('id')->on('games')->onDelete('cascade');
            $table->foreign('FK_categorie')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->dropForeign(['FK_game']);
	        $table->dropForeign(['FK_categorie']);
        });
        Schema::dropIfExists('cards');
    }
}
