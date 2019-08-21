<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recommender;

class RecommenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recommenders =Recommender::latest()->paginate(5);
  
        return view('recommenders.index',compact('recommenders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recommenders.create');
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
        ]);
  
        Recommender::create($request->all());
   
        return redirect()->route('recommenders.index')
                        ->with('success','Recommender created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rid)
    {
        $recommender = Recommender::find($rid);
        return view('recommenders.show',['recommender'=> $recommender]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($rid)
    {
        $recommender = Recommender::find($rid);
        return view('recommenders.edit', compact('recommender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rid)
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
            'state'=>'required'
          ]);
          $recommender = Recommender::find($rid);
          $recommender->name = $request->get('name');
          $recommender->fathername = $request->get('fathername');
          $recommender->nrc_no = $request->get('nrc_no');
          $recommender->work = $request->get('work');
          $recommender->ph_no = $request->get('ph_no');
          $recommender->acre_no = $request->get('acre_no');
          $recommender->village = $request->get('village');
          $recommender->township = $request->get('township');
          $recommender->state = $request->get('state');
          $recommender->save();
  
        return redirect()->route('recommenders.index')
                        ->with('success','Recommender updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rid)
    {
     $recommender = Recommender::find($rid);
     $recommender->delete();

     return redirect('/recommenders')->with('success', 'Recommender has been deleted Successfully');

    }
}
