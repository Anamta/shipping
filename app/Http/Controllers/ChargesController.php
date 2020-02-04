<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charge;

class ChargesController extends Controller
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
        return view('Charges\createchages');
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
            'charges' => 'required',
            'desc' => 'required',
        ]);
        $charge = new Charge;
        $charge->code = $request->code;
        $charge->charges_type = $request->charges;
        $charge->description = $request->desc;
        
        $charge->save();

        return redirect('charges/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $charges = Charge::all();
        return view('Charges\showcharges',compact('charges'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=true;
        $charge = Charge::find($id);
        return view('Charges\editcharges',compact('charge','edit'));

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
        $charge = Charge::find($id);
        $request->validate([
            'code' => 'required',
            'charges' => 'required',
            'desc' => 'required',
        ]);
        
        $charge->code = $request->code;
        $charge->charges_type = $request->charges;
        $charge->description = $request->desc;
        // return $charge;
        $charge->save();

        return redirect('charges/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $charge = Charge::find($id);
        $charge->delete();
        return redirect('charges/show');
    }
}
