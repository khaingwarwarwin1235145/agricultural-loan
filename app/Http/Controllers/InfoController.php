<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use Borrower;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('info.create');
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
            // $id = DB::table('borrowers')
            // ->select('borrowers.id')
            // ->where('borrowers.name', '=', Input::get('name'))->get();
            // foreach($id as $key){
            //     $update = DB::table('borrowers')
            //     ->where('borrowers.id', $key->id)
            //     ->update(array('borrowers.varified'=> 1));
            //     return $update;
            // }
            if($validator->fails()){
                return false;
            }else{
                $id = DB::table('borrowers')
                    ->select('borrowers.id')
                    ->where('borrowers.name', '=', Input::get('name'))->get();
                    foreach($id as $key){
                        $creditamount = Input::get('acre_no') * 100000;     
                        $toeamount = $creditamount * 0.02;
                        $totalamount = $creditamount + ($toeamount * 8);
                        $code = mt_rand(000000000, 999999999);
                        $date = date("Y-m-d") ;
                        $update = DB::table('borrowers')
                        ->where('borrowers.id', $key->id)
                        ->update(array('borrowers.varified'=> 1));
                        
                        $amount = DB::table('borrowers')
                        ->where('borrowers.id', $key->id)
                        ->update(['borrowers.creditamount'=> $creditamount,
                        'borrowers.toeamount'=> $toeamount,
                        'borrowers.totalamount'=> $totalamount,
                        'borrowers.code'=> $code,
                        'borrowers.date'=> $date]);
                        $borrower = DB::table('borrowers')
                        ->select(['borrowers.name','borrowers.creditamount','borrowers.toeamount',
                        'borrowers.totalamount','borrowers.code','borrowers.date'])
                        ->where('borrowers.id', '=', $key->id)->get();
                        return view('info.moneyamount', array('borrower'=>$borrower));
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
