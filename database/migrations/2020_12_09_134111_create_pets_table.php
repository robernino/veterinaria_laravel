<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('owner_id')->unsigned();
            $table->unsignedBigInteger('vet_id')->unsigned();            
            $table->unsignedBigInteger('species_id')->unsigned();
            $table->unsignedBigInteger('appointments_id')->unsigned();
            $table->unsignedBigInteger('attention_records_id')->unsigned();
            $table->string('name', 128);
            $table->string('age');
            $table->string('weight');
            $table->enum('gender', ['MALE', 'FEMALE'])->default('MALE');
            $table->string('colour')->nullable();
            $table->string('image')->nullable();            
            $table->timestamps();

            //Relations
            // $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
            // $table->foreign('vet_id')->references('id')->on('vets')->onDelete('cascade');
            // $table->foreign('species_id')->references('id')->on('species')->onDelete('cascade');
            // $table->foreign('appointments_id')->references('id')->on('appointments')->onDelete('cascade');
            // $table->foreign('attention_records_id')->references('id')->on('attention_records')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}