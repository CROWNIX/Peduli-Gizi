<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("users", function (Blueprint $table) {
            $table->id();
            $table->foreignId("role_id")->default(2)->constrained();
            $table->foreignId("user_need_id")->nullable()->constrained();
            $table->string("name");
            $table->string("username")->unique();
            $table->string("email")->unique();
            $table->enum("gender", ["laki-laki", "perempuan"])->nullable();
            $table->integer("age")->nullable();
            $table->integer("weight")->nullable();
            $table->integer("height")->nullable();
            $table->text("image")->default("default.jpg");
            $table->timestamp("email_verified_at")->nullable();
            $table->string("password")->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}