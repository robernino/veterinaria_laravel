<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vets', function (Blueprint $table) {
            $table->bigIncrements('id');      
            $table->unsignedBigInteger('specialty_id')->unsigned();      
            $table->string('name', 128);
            $table->string('last_name', 128);            
            $table->string('address')->nullable();            
            $table->integer('telephone')->unique();
            $table->string('email')->unique();            
            $table->timestamps();

            //Relations
            // $table->foreign('specialty_id')->references('id')->on('specialties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vets');
    }
}