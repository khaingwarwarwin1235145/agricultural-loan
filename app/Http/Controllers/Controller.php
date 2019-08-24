<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Borrower;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function check()
    {
      
                $borrower = DB::table('borrowers')
                ->select(['borrowers.name','borrowers.creditamount',
                'borrowers.toeamount','borrowers.totalamount',
                'borrowers.date','borrowers.ph_no','borrowers.rname'])
                ->where('borrowers.varified', '=', 1 )->get();
                return view('result', array('borrower'=>$borrower));
                
         
    }
public function mail()
{

   $code = '61053889';
   Mail::to('winaung1@gmail.com')->send(new SendMailable($code));
   
   return 'Email was sent';
}
}
