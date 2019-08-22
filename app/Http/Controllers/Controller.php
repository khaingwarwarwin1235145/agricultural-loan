<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Borrower;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
        public function check()
    {
      
                $borrower = DB::table('borrowers')
                ->select(['borrowers.name','borrowers.fathername','borrowers.nrc_no','borrowers.ph_no','borrowers.village','borrowers.township','borrowers.state','borrowers.rname'])
                ->where('borrowers.varified', '=', 1)->get();
                return view('result', array('borrower'=>$borrower));
                
         
    }
}
