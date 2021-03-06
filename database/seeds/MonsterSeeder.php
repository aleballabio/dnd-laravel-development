<?php

use Illuminate\Database\Seeder;
use App\Monster;

class MonsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monstersList = config('monsters');

        foreach ($monstersList as $monster) {
            $monsterFinal = [
                'index' => $monster['index'],
            ];
            Monster::create($monsterFinal);
        }
    }
}
