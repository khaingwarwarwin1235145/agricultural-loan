<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Borrower;
use App\Result;
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
                return view('info.moneyamount',array('input'=>$input));
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
