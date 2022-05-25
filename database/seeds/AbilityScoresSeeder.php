<?php

use Illuminate\Database\Seeder;
use App\AbilityScores;

class AbilityScoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $abilityScoresList = config('abilityScores');

        foreach ($abilityScoresList as $abilityScores) {
            AbilityScores::create($abilityScores);
        }
    }
}
