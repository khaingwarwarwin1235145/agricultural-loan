<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommender extends Model
{
    protected $primaryKey = 'rid';
    protected $fillable = [
        'name',
        'fathername',
        'nrc_no',
        'work',
        'ph_no',
        'acre_no',
        'village',
        'township',
        'state',
    ];
}
