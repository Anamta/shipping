<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipper;

class ShipperController extends Controller
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
        return view('Shipper\shipper');
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
            'name' => 'required|unique:shippers|max:255',
            'contact_no' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'contactperson' => 'required',
            'address' => 'required',
        ]);
        $shipper = new Shipper;
        
        $shipper->name = $request->name;
        $shipper->contact_no = $request->contact_no;
        $shipper->fax_no = $request->fax;
        $shipper->email = $request->email;
        $shipper->contact_person = $request->contactperson;
        $shipper->address = $request->address;
    
        $shipper->save();

        return redirect('shipper/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $shippers = Shipper::all();
         return view('Shipper\showshipper',compact('shippers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipper = Shipper::find($id);
        return view('Shipper\editshipper',compact('shipper'));
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
        $shipper = Shipper::find($id);
        $request->validate([
            
            'name' => 'required',
            'contact_no' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'contactperson' => 'required',
            'address' => 'required',
        ]);
        
        $shipper->name = $request->name;
        $shipper->contact_no = $request->contact_no;
        $shipper->fax_no = $request->fax;
        $shipper->email = $request->email;
        $shipper->contact_person = $request->contactperson;
        $shipper->address = $request->address;
    
        $shipper->save();

        return redirect('shipper/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shipper = Shipper::find($id);
        $shipper->delete();
        return redirect('shipper/show');
    }
}
