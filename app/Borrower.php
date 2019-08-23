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
        'email',
        'acre_no',
        'creditamount',
        'toeamount',
        'totalamount',
        'code',
        'date',
        'village',
        'township',
        'state',
        'varified',
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
