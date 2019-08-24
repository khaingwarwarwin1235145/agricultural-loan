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
        'returnmoney',
        'code',
        'date',
        'returndate',
        'village',
        'township',
        'state',
        'varified',
        'varified-2',
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
