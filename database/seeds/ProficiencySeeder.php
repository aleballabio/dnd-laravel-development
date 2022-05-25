<?php

use App\Proficiency;
use Illuminate\Database\Seeder;

class ProficiencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $proficiencyList = config('proficiencies');

        foreach ($proficiencyList as $proficiency) {
            Proficiency::create($proficiency);
        }
    }
}