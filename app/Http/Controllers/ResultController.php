<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use App\Borrower;
use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                // 'nrc_no' => Input::get('nrc_no'),
                // 'rnrc_no' => Input::get('rnrc_no')
                'rname' => Input::get('rname'),
                'racre_no'=>Input::get('racre_no')
                    );
            $rules = array(
                'name' => 'required',
                // 'nrc_no' => 'required',
                // 'rnrc_no' => 'required'
                'rname' => 'required',
                'racre_no'=>'required',
            );
            $validator = Validator::make($input,$rules);
            if($validator->fails()){
                return "false";
            }else{
                DB::table('Result')->insert(array(Input::get('name')));
                return view('info.moneyamount',array('input'=>$input));
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
