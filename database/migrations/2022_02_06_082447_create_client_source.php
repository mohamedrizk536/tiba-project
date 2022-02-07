<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientSource extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_source', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('client_id');
          //  $table->foreign('client_id')->references("id")->on("clients");
            $table->BigInteger('source_id');
          //  $table->foreign('source_id')->references("id")->on("sources");
          //  $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_source');
    }
}
