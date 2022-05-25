<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonsterProficienciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monster_proficiencies', function (Blueprint $table) {
            $table->string('monster_index');
            // $table->foreign('monster_index')->references('index')->on('monsters');

            $table->string('proficiency_index');
            // $table->foreign('proficiency_index')->references('index')->on('proficiencies');

            // $table->primary(['monster_index', 'proficiency_index']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monster__proficiencies');
    }
}
