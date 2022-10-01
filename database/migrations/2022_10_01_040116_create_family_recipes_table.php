<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("recipe_id");
            $table->integer("portion");
            $table->string("day");
            $table->enum("type", ["balita", "remaja", "dewasa"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_recipes');
    }
}