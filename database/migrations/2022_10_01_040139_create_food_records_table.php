<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->nullable()->constrained();
            $table->foreignId("family_id")->nullable()->constrained();
            $table->foreignId("recipe_id")->constrained();
            $table->string("day");
            $table->enum("time", ["sarapan", "makan siang", "makan malam"]);
            $table->integer("portion");
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
        Schema::dropIfExists('food_records');
    }
}