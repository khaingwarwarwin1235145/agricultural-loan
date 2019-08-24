<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrower;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;


class BorrowersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrowers =Borrower::all();
  
        return view('borrowers.index',compact('borrowers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('borrowers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'fathername'=> 'required',
            'nrc_no'=>'required',
            'work'=>'required',
            'ph_no'=>'required',
            'acre_no'=>'required',
            'village'=>'required',
            'township'=>'required',
            'state'=>'required',
            'email'=>'required',
            'rname'=>'required',
            'rfathername'=> 'required',
            'rnrc_no'=>'required',
            'rwork'=>'required',
            'rph_no'=>'required',
            'rvillage'=>'required',
            'rtownship'=>'required',
            'rstate'=>'required'
          ]);
          $borrower = new Borrower([
            'name' => $request->get('name'),
            'fathername'=> $request->get('fathername'),
            'nrc_no'=> $request->get('nrc_no'),
            'work'=> $request->get('work'),
            'ph_no'=> $request->get('ph_no'),
            'acre_no'=> $request->get('acre_no'),
            'village'=> $request->get('village'),
            'township'=> $request->get('township'),
            'state'=> $request->get('state'),
            'email'=> $request->get('email'),
            'rname' => $request->get('rname'),
            'rfathername'=> $request->get('rfathername'),
            'rnrc_no'=> $request->get('rnrc_no'),
            'rwork'=> $request->get('rwork'),
            'rph_no'=> $request->get('rph_no'),
            'rvillage'=> $request->get('rvillage'),
            'rtownship'=> $request->get('rtownship'),
            'rstate'=> $request->get('rstate')
          ]);
          $borrower->save();
          if( Input::get('acre_no') > 10 ){
            return redirect()->route('borrowers.create')
            ->with('success','လူႀကီးမင္းပိုင္ဆိူင္သည့္လယ္ဧကသည္ ၉ဧကထက္ေက်ာ္လြန္ေနေသာေၾကာင့္ လူႀကီးမင္းကို ေတာင္သူႀကီးဟုသတ္မွတ္ေသာေၾကာင့္ ေခ်းေငြထုတ္ေပးမည္မဟုတ္ပါ');

          }
          return redirect()->route('/borrowers')
          ->with('success', 'Borrower has been added');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $borrower = Borrower::find($id);
        return view('borrowers.show',['borrower'=> $borrower]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $borrower = Borrower::find($id);        
        return view('borrowers.edit',compact('borrower'));
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
        $request->validate([
            'name'=>'required',
            'fathername'=> 'required',
            'nrc_no'=>'required',
            'work'=>'required',
            'ph_no'=>'required',
            'email'=>'required',
            'acre_no'=>'required',
            'village'=>'required',
            'township'=>'required',
            'state'=>'required', 
            'rname'=>'required',
            'rfathername'=> 'required',
            'rnrc_no'=>'required',
            'rwork'=>'required',
            'ph_no'=>'required',
            'rvillage'=>'required',
            'rtownship'=>'required',
            'rstate'=>'required'
          ]);
          $borrower = Borrower::find($id);
          $borrower->name = $request->get('name');
          $borrower->fathername = $request->get('fathername');
          $borrower->nrc_no = $request->get('nrc_no');
          $borrower->work = $request->get('work');
          $borrower->ph_no = $request->get('ph_no');
          $borrower->email = $request->get('email');
          $borrower->acre_no = $request->get('acre_no');
          $borrower->village = $request->get('village');
          $borrower->township = $request->get('township');
          $borrower->state = $request->get('state');
          $borrower->rname = $request->get('rname');
          $borrower->rfathername = $request->get('rfathername');
          $borrower->rnrc_no = $request->get('rnrc_no');
          $borrower->rwork = $request->get('rwork');
          $borrower->rph_no = $request->get('rph_no');
          $borrower->rvillage = $request->get('rvillage');
          $borrower->rtownship = $request->get('rtownship');
          $borrower->rstate = $request->get('rstate');
          $borrower->save();
  
        return redirect()->route('borrowers.index')
                        ->with('success','Borrower updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borrower = Borrower::find($id);
        $borrower->delete();
  
        return redirect()->route('borrowers.index')
                        ->with('success','Borrower deleted successfully');
    }
}
