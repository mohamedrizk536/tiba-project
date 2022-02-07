<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('first_phone');
            $table->integer('second_phone');
            $table->string('commercial_name');
            $table->integer('fax');
            $table->string('logo');
            $table->string('sector_type');
            $table->string('delegator');
            $table->string('client_type');
            $table->string('management_type');
            $table->string('gover');
            $table->string('city');
            $table->string('area');
            $table->string('active_type');
            $table->string('address');
            $table->string('line_number_type');
            $table->string('gas_type');
            $table->string('container_type');
            $table->string('app');
            $table->string('source');
            $table->string('location');
            $table->string('lawer_name');
            $table->integer('commercial_record');
            $table->integer('tax_record');
            $table->string('client_case');
            $table->integer('whats_number');




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
        Schema::dropIfExists('clients');
    }
}
