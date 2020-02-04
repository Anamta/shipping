<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Container;
use App\Port;
use App\ContainerType;

class ContainerController extends Controller
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
        $port= Port::all();
        $containertype= ContainerType::all();
        return view('Container\container',compact('port','containertype'));
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
            'description' => 'required',
            'cost' => 'required',
            'supplier' => 'required',
            'container_type_id' => 'required',
            'port_id' => 'required',
        ]);
        $container = new Container;
        
        $container->code = $request->code;
        $container->description = $request->description;
        $container->cost = $request->cost;
        $container->supplier = $request->supplier;
        $container->container_type_id = $request->container_type_id;
        $container->pur_port_id = $request->port_id;
    
        $container->save();

        return redirect('container/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
          $containers = Container::with('port','containertype')->get();
         return view('Container\showcontainer',compact('containers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $container = Container::with('port','containertype')->find($id);
        $containertype= ContainerType::all();
        $port= Port::all();
        return view('Container\editcontainer',compact('container','containertype','port'));
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
        $container = Container::with('port','containertype')->find($id);
        $request->validate([
            'code' => 'required',
            'description' => 'required',
            'cost' => 'required',
            'supplier' => 'required',
            'container_type_id' => 'required',
            'port_id' => 'required',
        ]);
        
        $container->code = $request->code;
        $container->description = $request->description;
        $container->cost = $request->cost;
        $container->supplier = $request->supplier;
        $container->container_type_id = $request->container_type_id;
        $container->pur_port_id = $request->port_id;
        $container->save();

        return redirect('container/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $container = Container::with('port','containertype')->find($id);
        $container->delete();
        return redirect('container/show');
    }
}
