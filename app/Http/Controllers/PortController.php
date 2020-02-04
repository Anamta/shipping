<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;
use App\Charge;
use App\Port_Charge;
use PhpParser\Node\Stmt\Foreach_;

class PortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $port= Port::with('portcharges')->find($id);
        $charges= Charge::all();
        $import = Charge::where('charges_type', '=', 'Import')->get();
        $export = Charge::where('charges_type', '=', 'Export')->get();
        return view('Port\portview',compact('port','charges','import','export'));
    }


    public function portchargestype()
    {
        $charges= Charge::all();
        $import = Charge::where('charges_type', '=', 'Import')->get();
        $export = Charge::where('charges_type', '=', 'Export')->get();
        return view('Port\chargestype',compact('charges','import','export'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'code' => 'bail|required',
            'name' => 'required',
            'address' => 'required',
        ]);
        $port = new Port;
        $port->code = $request->code;
        $port->name = $request->name;
        $port->address = $request->address;
        $charges_id = $request->charges_id;
        $amount = $request->amount;
        $port->save();
        if(count($charges_id) > 0)
        {
        
            foreach($request->charges_id as $items=>$v)
            {                
                $data = array(
                    'port_id' => $port->id,
                    'charges_id' => $request->charges_id[$items],
                    'amount' => $amount[$items],
                );
                Port_Charge::insert($data);

            }
         

            // foreach($charges_id as $id) {

            //     Port_Charge::create([
            //         'port_id'   => $port->id,
            //         'charges_id' => $id,
            //         'amount' => $amount,
            //     ]);
            // }
            // if($request->ajax())
            //     {
            //     //$books=$request->books;
            //     $portcharges = $request->portcharges;
            //     $data = array();
            //     foreach($portcharges as $portcharge)
            //     {
            //         if(!empty($portcharge))
            //         {
            //         $data[] =[
            //                     'port_id' => $port->id,
            //                     'charges_id' => $charges_id,
            //                     'amount' => $amount,
            //                 ];                 

            //     }}
            //     Port_Charge::insert($data);
            //     // <!--DB::table('books')->insert($data);-->
            //     }
            //  $portcharges = new Port_Charge;
            //  foreach($portcharges as $portcharge)
            //  {
            //     $portcharge->port_id = $port->id;
            //     $portcharge->charges_id = $charges_id;
            //     $portcharge->amount = $amount;
            //  }
            // $portcharges->port_id = $port->id;
            // $portcharges->charges_id = ;
            // $portcharges->amount = ;
            //$portcharges->save();
        }

        return redirect('port/show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $charges = Charge::get();
        return view('Port\port',compact('charges'));
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
        ]);
        $port = new Port;
        $port->code = $request->code;
        $port->name = $request->name;
        $port->address = $request->address;
        
        $port->save();
        if($port)
        {
            $portcharges = new Port_Charge;
            $portcharges->port_id = $port->id;
            $portcharges->charges_id = $request->charges_id;
            $portcharges->amount = $request->amount;
            $portcharges->save();
        }

        return redirect('port/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $ports= Port::with('portcharges')->get();
        return view('Port\showport',compact('ports'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $port = Port::find($id);
        // return view('Port\editport',compact('port'));
        $ports= Port::with('portcharges')->find($id);
        $charges = Charge::get();
        return view('Port\editport',compact('ports','charges'));

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
        $ports= Port::with('portcharges')->find($id);
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'address' => 'required',
        ]);

        $ports->code = $request->code;
        $ports->name = $request->name;
        $ports->address = $request->address;
        
        $ports->save();
        if($ports)
        {
            $portcharges = Port_Charge::with('charge')->find($id);
            $portcharges->port_id = $ports->id;
            $portcharges->charges_id = $request->charges_id;
            $portcharges->amount = $request->amount;
            $portcharges->save();
        }

        return redirect('port/show');
        
        // $port->code = $request->code;
        // $port->name = $request->name;
        // $port->address = $request->address;
        // // return $port;
        // $port->save();

        // return redirect('port/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $port = Port::with('portcharges')->find($id);
        $port->delete();
        return redirect('port/show');
    }
}
