<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'lname',
        'lnrc_no',
        'lacre_no',
        'lamount',
        'date',
        'llastdate',
        'ldate',
    ];
}
