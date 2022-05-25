<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProficienciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proficiencies', function (Blueprint $table) {
            $table->id();
            $table->string('index');
            $table->unsignedBigInteger('ability_scores_id');
            $table->string('name', 100);
            $table->string('type', 100);
            $table->string('reference', 100);

            $table->foreign('ability_scores_id')
                ->references('index')
                ->on('ability_scores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proficiencies');
    }
}