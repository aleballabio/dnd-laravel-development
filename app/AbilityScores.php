<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abilityScores extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'index';
    protected $keyType = 'string';


    protected $fillable = [
        'index',
        'name',
        'full_name',
        'desc',
        'proficiency_id'
    ];

    public function proficiencies()
    {
        return $this->belongsTo('App\Proficiencies', 'abilityScores_index');
    }
}