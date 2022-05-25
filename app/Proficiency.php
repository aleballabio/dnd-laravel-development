<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proficiency extends Model
{

    public $timestamps = false;
    protected $primaryKey = 'index';
    protected $keyType = 'string';


    protected $fillable = [
        'index',
        'name',
        'type',
        'reference',
        'ability_scores_id'
    ];

    public function monsters()
    {
        return $this->belongsToMany('App\Monster');
    }

    public function abilityScore()
    {
        return $this->hasOne('App\AbilityScores');
    }
}