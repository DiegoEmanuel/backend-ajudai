<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_donor');
            // $table->unsignedBigInteger('id_association');
            $table->unsignedBigInteger('id_donor_adress');
            $table->timestamps('');

            $table->foreign('id_donor')->references('id')->on('donors')->onDelete('cascade');
            $table->foreign('id_donor_adress')->references('id')->on('adresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
