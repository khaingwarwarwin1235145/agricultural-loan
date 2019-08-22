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
                // 'nrc_no' => Input::get('nrc_no'),
                // 'rnrc_no' => Input::get('rnrc_no')
                'rname' => Input::get('rname'),
                'acre_no'=>Input::get('acre_no')
                    );
            $rules = array(
                'name' => 'required',
                // 'nrc_no' => 'required',
                // 'rnrc_no' => 'required'
                'rname' => 'required',
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
                        $update = DB::table('borrowers')
                        ->where('borrowers.id', $key->id)
                        ->update(array('borrowers.varified'=> 1));
                        }
                
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
