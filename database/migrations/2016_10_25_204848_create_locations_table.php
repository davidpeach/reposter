<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid')->nullable();
            $table->string('name')->nullable();
            $table->string('lat', 55)->nullable();
            $table->string('lng', 55)->nullable();
            $table->text('address')->nullable();
            $table->string('city', 105)->nullable();
            $table->string('state', 105)->nullable();
            $table->string('postalCode', 32)->nullable();
            $table->string('country', 105)->nullable();
            $table->text('venue_serialized')->nullable();
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
        Schema::drop('locations');
    }
}
