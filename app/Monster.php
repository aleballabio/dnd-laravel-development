<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    protected $primaryKey = 'index';
    protected $keyType = 'string';

    protected $fillable = [
        'index',
        // 'proficiency_index'
    ];

    public function proficiencies()
    {
        return $this->belongsToMany('App\Monster_Proficiency', 'proficiency_id');
    }
}
