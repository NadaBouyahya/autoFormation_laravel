<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            Schema::create('citizen', function (Blueprint $table) {
                $table->bigIncrements('id_citizen');
                $table->string('name');
                $table->unsignedBigInteger('id_city');
    
                $table->foreign('id_city')->references('city_id')->on('city')->constrained()->onDelete('cascade');
    
                $table->timestamps();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citizens');
    }
};
