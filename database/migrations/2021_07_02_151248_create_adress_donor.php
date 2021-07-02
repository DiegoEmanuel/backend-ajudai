<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressDonor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adress_donor', function (Blueprint $table) {
            $table->id('adress_donor_id');
            $table->string('street_adress_donor');
            $table->string('street_adress_donor');
            $table->string('district_adress_donor');
            $table->string('number_adress_donor');
            $table->string('complement_adress_donor');

            $table->foreignId('donation_id')->constrained('donation')->onDelete('cascade');
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
        Schema::dropIfExists('adress_donor');
    }
}
