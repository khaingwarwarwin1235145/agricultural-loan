<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
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
        'varified',
        'rid',
        'rname',
        'rfathername',
        'rnrc_no',
        'rwork',
        'rph_no',
        'rvillage',
        'rtownship',
        'rstate',
        
        
    ];
}
