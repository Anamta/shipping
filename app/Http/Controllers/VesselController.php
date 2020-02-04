<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vessel;

class VesselController extends Controller
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
        return view('vessel\vessel');
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
            'owner' => 'required',
        ]);
        $vessel = new Vessel;
        $vessel->code = $request->code;
        $vessel->name = $request->name;
        $vessel->owner = $request->owner;
        
        $vessel->save();

        return redirect('vessel/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $vessels = Vessel::all();
        return view('vessel\showvessel',compact('vessels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vessel = Vessel::find($id);
        return view('vessel\editvessel',compact('vessel'));

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
        $vessel = Vessel::find($id);
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'owner' => 'required',
        ]);
        
        $vessel->code = $request->code;
        $vessel->name = $request->name;
        $vessel->owner = $request->owner;
        // return $vessel;
        $vessel->save();

        return redirect('vessel/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vessel= Vessel::find($id);
        $vessel->delete();
        return redirect('vessel/show');
    }
}
