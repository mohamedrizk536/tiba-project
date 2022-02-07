<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();

            $table->string('worker_name');
            $table->string('job_title');
            $table->integer('enternal_phone');
            $table->string('worker_email');
            $table->integer('worker_phone');
            $table->string('management_type');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references("id")->on("clients");
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
        Schema::dropIfExists('workers');
    }
}
