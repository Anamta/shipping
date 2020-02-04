<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContainerType;

class ContainerTypeController extends Controller
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
        return view('ContainerType\containertype');
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
            'size' => 'required',
        ]);
        $containertype = new ContainerType;
        $containertype->size = $request->size;
        
        $containertype->save();

        return redirect('containertype/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $containertypes = ContainerType::all();
         return view('ContainerType\showcontainertype',compact('containertypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $containertype = ContainerType::find($id);
        return view('ContainerType\editcontainertype',compact('containertype'));
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
        $containertype = ContainerType::find($id);
        $request->validate([
            'size' => 'required',
        ]);
        $containertype->size = $request->size;

    
        $containertype->save();

        return redirect('containertype/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $containertype = ContainerType::find($id);
        $containertype->delete();
        return redirect('containertype/show');
    }
}
