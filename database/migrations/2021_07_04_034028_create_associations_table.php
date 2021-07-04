<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->string('name_association',100);
            $table->unsignedBigInteger('city_id');
            $table->string('description',100);
            $table->string('leader_association',50);
            $table->string('email_association',80);
            $table->string('phone_association',11);
            $table->string('street_association',100);
            $table->string('district_associations',45);
            $table->string('number_associations',6);
            $table->string('complement_associations',60)->nullable();
            $table->string('avatar_associations',200)->nullable();
            $table->text('description_associations',1000)->nullable();

            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

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
        Schema::dropIfExists('associations');
    }
}
