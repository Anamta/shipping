<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContainerLine;

class ContainerLineController extends Controller
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
        return view('ContainerDetail\containerdetail');
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
            'code' => 'required',
            'name' => 'required|unique:container_lines|max:255',
            'contact_no' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'url' => 'required',
            'address' => 'required',
        ]);
        $containerdetail = new ContainerLine;
        $containerdetail->code = $request->code;
        $containerdetail->name = $request->name;
        $containerdetail->contact_no = $request->contact_no;
        $containerdetail->fax_no = $request->fax;
        $containerdetail->email = $request->email;
        $containerdetail->url = $request->url;
        $containerdetail->address = $request->address;
    
        $containerdetail->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $containerdetails = ContainerLine::all();
         return view('ContainerDetail\showcontainerdetail',compact('containerdetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $containerdetail = ContainerLine::find($id);
        return view('ContainerDetail\editcontainerdetail',compact('containerdetail'));
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
        $containerdetail = ContainerLine::find($id);
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'contact_no' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'url' => 'required',
            'address' => 'required',
        ]);
        $containerdetail->code = $request->code;
        $containerdetail->name = $request->name;
        $containerdetail->contact_no = $request->contact_no;
        $containerdetail->fax_no = $request->fax;
        $containerdetail->email = $request->email;
        $containerdetail->url = $request->url;
        $containerdetail->address = $request->address;
    
        $containerdetail->save();

        return redirect('containerdetail/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $containerdetail = ContainerLine::find($id);
        $containerdetail->delete();
        return redirect('containerdetail/show');
    }
}
