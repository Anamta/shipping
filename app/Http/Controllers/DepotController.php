<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Depot;

class DepotController extends Controller
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
        return view('depot\depot');
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
            'code' => 'bail|required',
            'name' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
            'contact_person' => 'required',
        ]);
        $depot = new Depot();
        $depot->code = $request->code;
        $depot->name = $request->name;
        $depot->address = $request->address;
        $depot->contact_no = $request->contact_no;
        $depot->contact_person = $request->contact_person;
        
        $depot->save();

        return redirect('depot/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $depots = Depot::all();
        return view('depot\showdepot',compact('depots'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $depot = Depot::find($id);
        return view('depot\editdepot',compact('depot'));

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
        $depot = Depot::find($id);
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
            'contact_person' => 'required',
        ]);
        $depot->code = $request->code;
        $depot->name = $request->name;
        $depot->address = $request->address;
        $depot->contact_no = $request->contact_no;
        $depot->contact_person = $request->contact_person;
        
        $depot->save();

        return redirect('depot/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depot = Depot::find($id);
        $depot->delete();
        return redirect('depot/show');
    }
}
