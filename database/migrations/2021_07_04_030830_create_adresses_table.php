<?php

use App\Models\Donor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('name_donor');
            $table->unsignedBigInteger('id_city');
            $table->string('street_donor',100);
            $table->string('dristrict_donor',45);
            $table->string('number_donor',6);
            $table->string('complement_donor',6)->nullable();
            $table->timestamps();

            $table->foreign('name_donor')->references('id')->on('donors')->onDelete('cascade');
            $table->foreign('id_city')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
