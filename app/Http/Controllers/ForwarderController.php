<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forwarder;

class ForwarderController extends Controller
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
        return view('Forwarder\forwarder');
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
        $forwarder = new Forwarder;
        
        $forwarder->name = $request->name;
        $forwarder->contact_no = $request->contact_no;
        $forwarder->fax_no = $request->fax;
        $forwarder->email = $request->email;
        $forwarder->contact_person = $request->contactperson;
        $forwarder->address = $request->address;
    
        $forwarder->save();

        return redirect('forwarder/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $forwarders = Forwarder::all();
         return view('Forwarder\showforwarder',compact('forwarders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forwarder = Forwarder::find($id);
        return view('Forwarder\editforwarder',compact('forwarder'));
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
        $forwarder = Forwarder::find($id);
        $request->validate([
            
            'name' => 'required',
            'contact_no' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'contactperson' => 'required',
            'address' => 'required',
        ]);
        
        $forwarder->name = $request->name;
        $forwarder->contact_no = $request->contact_no;
        $forwarder->fax_no = $request->fax;
        $forwarder->email = $request->email;
        $forwarder->contact_person = $request->contactperson;
        $forwarder->address = $request->address;
    
        $forwarder->save();

        return redirect('forwarder/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forwarder = Forwarder::find($id);
        $forwarder->delete();
        return redirect('forwarder/show');
    }
}
