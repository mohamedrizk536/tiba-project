<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserrs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userrs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("username");
            $table->integer("phone");
            $table->string("password");
            $table->string("confirmation_password");
            $table->unsignedBigInteger('permission_id');
            $table->foreign('permission_id')->references("id")->on("permissions");
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
        Schema::dropIfExists('userrs');
    }
}
