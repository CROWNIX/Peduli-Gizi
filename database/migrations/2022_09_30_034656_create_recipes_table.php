<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("need_sub_category_id")->constrained();
            // $table->foreignId("age_category_id");
            $table->string("title");
            $table->string("slug")->unique();
            $table->text("image")->default("default.jpg");
            // $table->text("description");
            $table->longText("ingridients");
            $table->longText("steps");
            $table->integer("portion");
            $table->integer("energy");
            $table->decimal("protein", $precision = 8, $scale = 1);
            $table->decimal("fat", $precision = 8, $scale = 1);
            $table->decimal("carbohydrate", $precision = 8, $scale = 1);
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
        Schema::dropIfExists('recipes');
    }
}