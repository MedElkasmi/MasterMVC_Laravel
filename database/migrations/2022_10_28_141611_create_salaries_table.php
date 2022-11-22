<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_id');
            $table->foreign('employe_id')->references('id')->on('Employes');
            $table->string('employe_name');
            $table->string('employe_skills');
            $table->string('employe_entity');
            $table->date('salary_upgrade');
            $table->double('salary_brut');
            $table->double('salary_net');
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
        Schema::dropIfExists('salaries');
    }
}
