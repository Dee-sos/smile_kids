<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcribers', function (Blueprint $table) {
            $table->increments('subscriber_id');
            $table->string('name');
            $table->string('phone_no'); 
            $table->string('gender'); 
            $table->string('age_group'); 
            $table->string('region'); 
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
        Schema::dropIfExists('subcribers');
    }
}
