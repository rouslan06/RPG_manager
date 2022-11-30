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
        Schema::create('personnages', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->string('specialite');
            $table->tinyInteger('magie');
            $table->tinyInteger('force');
            $table->tinyInteger('agilite');
            $table->tinyInteger('intelligence');
            $table->tinyInteger('PV');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnages');
    }
};
