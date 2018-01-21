<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');

            $table->string('statue');
            $table->tinyInteger('is_finished');
            $table->string('type');
            $table->tinyInteger('is_cancel');

            /////////// Time ///////////////////////////////
            $table->time('time');
            $table->date('date');

            ////////////////////////////////////////////////////
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            ////////////////////////////////////////////////////
            $table->integer('doctor_id')->unsigned();
            $table->foreign('doctor_id')->references('id')->on('doctors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            ////////////////////////////////////////////////////
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('visit_orders')
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
        Schema::dropIfExists('visits');
    }
}
