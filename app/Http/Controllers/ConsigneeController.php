<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consignee;

class ConsigneeController extends Controller
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
        return view('Consignee\consignee');
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
        $consignee = new Consignee;
        
        $consignee->name = $request->name;
        $consignee->contact_no = $request->contact_no;
        $consignee->fax_no = $request->fax;
        $consignee->email = $request->email;
        $consignee->contact_person = $request->contactperson;
        $consignee->address = $request->address;
    
        $consignee->save();

        return redirect('consignee/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $consignees = Consignee::all();
         return view('Consignee\showconsignee',compact('consignees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consignee = Consignee::find($id);
        return view('Consignee\editconsignee',compact('consignee'));
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
        $consignee = Consignee::find($id);
        $request->validate([
            
            'name' => 'required',
            'contact_no' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'contactperson' => 'required',
            'address' => 'required',
        ]);
        
        $consignee->name = $request->name;
        $consignee->contact_no = $request->contact_no;
        $consignee->fax_no = $request->fax;
        $consignee->email = $request->email;
        $consignee->contact_person = $request->contactperson;
        $consignee->address = $request->address;
    
        $consignee->save();

        return redirect('consignee/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consignee = Consignee::find($id);
        $consignee->delete();
        return redirect('consignee/show');
    }
}
