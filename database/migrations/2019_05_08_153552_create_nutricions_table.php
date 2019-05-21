<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutricionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutricions', function (Blueprint $table) {
            $table->increments('idN');
            $table->string('comidaN');
            $table->string('frutaN');
            $table->string('verduraN');
            $table->string('proteinaN');
            $table->string('aguaN',50)->nullable();
            $table->string('1litroN',50)->nullable();
            $table->string('2litroN',50)->nullable();
            $table->string('3litroN',50)->nullable();
            $table->string('4litroN',50)->nullable();
            $table->string('5litroN',50)->nullable();
            $table->string('restriccionN');
            $table->string('1resN',50)->nullable();
            $table->string('2res',50)->nullable();
            $table->string('3resN',50)->nullable();
            $table->string('4res',50)->nullable();
            $table->string('5resN',50)->nullable();
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
        Schema::dropIfExists('nutricions');
    }
}

