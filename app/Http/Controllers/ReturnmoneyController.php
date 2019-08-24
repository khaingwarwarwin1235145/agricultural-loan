<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Borrower;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use DB;

class ReturnmoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrower = DB::table('borrowers')
                ->select(['borrowers.name','borrowers.creditamount',
                'borrowers.toeamount','borrowers.totalamount','borrowers.returnmoney',
                'borrowers.returndate','borrowers.ph_no'])
                ->where('borrowers.varified-2', '=', 1)->get();
                return view('returnmoney.index', array('borrower'=>$borrower));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('returnmoney.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = array(
            'name' => Input::get('name'),
            'nrc_no' => Input::get('nrc_no'),
            'rnrc_no' => Input::get('rnrc_no'),
            'acre_no'=>Input::get('acre_no')
                );
        $rules = array(
            'name' => 'required',
            'nrc_no' => 'required',
            'rnrc_no' => 'required',
            'acre_no'=>'required',
        );
        $validator = Validator::make($input,$rules);
        if($validator->fails()){
            return false;
        }else{
            $id = DB::table('borrowers')
            ->select('borrowers.id')
            ->where('borrowers.name', '=', Input::get('name'))->get();
            foreach($id as $key){
                // $creditamount = Input::get('acre_no') * 100000; 
                $returndate = date("Y-m-d") ;

                $update = DB::table('borrowers')
                ->where('borrowers.id', $key->id)
                ->update(['borrowers.varified'=> 0,
                'borrowers.varified-2'=> 1]);

                $totalamount = DB::table('borrowers')
                ->select(['borrowers.totalamount'])
                ->where('borrowers.id', '=', $key->id)->get();
                foreach($totalamount as $item){
                    $returnamount = DB::table('borrowers')
                        ->where('borrowers.id', $key->id)
                        ->update(['borrowers.returnmoney'=> $item->totalamount,
                        'borrowers.returndate'=> $returndate]);
                }
                

                $borrower = DB::table('borrowers')
                ->select(['borrowers.name','borrowers.totalamount','borrowers.date'])
                ->where('borrowers.id', '=', $key->id)->get();

                return view('returnmoney.confirmation',array('borrower'=>$borrower));
                // // return $key->id;
                }
    }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
