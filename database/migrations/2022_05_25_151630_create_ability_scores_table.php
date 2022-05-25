<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilityScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ability_scores', function (Blueprint $table) {
            $table->id();
            $table->string('index');
            $table->string('proficiency_index');
            $table->string('name');
            $table->string('full_name')->nullable();
            $table->text('desc');

            $table->foreign('proficiency_index')
                ->references('index')
                ->on('proficiencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ability_scores');
    }
}