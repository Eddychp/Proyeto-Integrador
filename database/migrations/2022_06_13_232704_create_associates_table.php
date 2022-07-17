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
        Schema::create('associates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fatherlastname');
            $table->string('motherlastname');
            $table->string('dni');
            $table->date('birtdate');
            $table->enum('maricalstaus',['Casado','soltero','Viudo','Divorsiado']);
            $table->enum('sexo',['Masculino','Femenino']);
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('code');
            $table->enum('type',['empadronado','sin emparonar']);
            $table->enum('status',['presidente','secretario','tesorera','vocal','socio']);
            $table->unsignedBigInteger('stand_id');
            $table->foreign('stand_id')->references('id')->on('stands')->onDelete('cascade');
            $table->unsignedBigInteger('period_id');
            $table->foreign('period_id')->references('id')->on('periods')->onDelete('cascade');


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
        Schema::dropIfExists('associates');
    }
};
