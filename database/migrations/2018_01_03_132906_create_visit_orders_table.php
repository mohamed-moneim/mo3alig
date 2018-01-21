<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_orders', function (Blueprint $table) {
            $table->increments('id');
            //////// Who /////////////////////////////////
            $table->string('who_need_session');
            $table->string('gender');
            $table->integer('age');
            $table->string('social_statue');
            $table->string('move_level');
            $table->string('health_problem');
            //////// pain /////////////////////////////////
            $table->string('when_pain_start');
            $table->string('pain_position');
            $table->string('pain_deep');
            //////// Location ///////////////////////////////
            $table->string('location_floor_number');
            $table->string('location_street_name');
            $table->string('location_region');
            $table->string('location_city');
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            /////////// Time ///////////////////////////////
            $table->time('time');
            $table->date('date');
            $table->string('statue');
            $table->integer('is_publish')->default(0);
            ////////////////////////////////////////////////////
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')
                ->onUpdate('cascade')
                ->onDelete('cascade');


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
        Schema::dropIfExists('order_visits');
    }
}
