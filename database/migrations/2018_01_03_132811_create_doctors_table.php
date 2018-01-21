<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('photo')->nullable();

            $table->string('national_id');
            $table->string('national_id_expire')->nullable();
            $table->string('national_id_photo')->nullable();

            $table->string('graduation_year')->nullable();
            $table->string('graduation_year_photo')->nullable();

            $table->string('license_number')->nullable();
            $table->string('license_photo')->nullable();
            $table->string('health_name')->nullable();

            $table->string('category')->nullable();
            $table->string('specialty')->nullable();
            $table->string('cv')->nullable();

            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->integer('approved')->default(0);

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
        Schema::dropIfExists('doctors');
    }
}
