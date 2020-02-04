@extends('master')

@section('content')
<div class="content-wrapper">
<div class="right-side">
  <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Shipper Table</h3>
                    <a href="{{route('shipper.create')}}" class="btn btn-info pull-right">Add Shipper</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>S:No</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Fax No</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            <th>Contact Person</th>
                            <th>Action</th>
                        </tr>
                        @foreach($shippers as $shipper)
                        <tr>
                            <td>{{$shipper->id}}</td>
                            <td>{{$shipper->name}}</td>
                            <td>{{$shipper->address}}</td>
                            <td>{{$shipper->fax_no}}</td>
                            <td>{{$shipper->contact_no}}</td>
                            <td>{{$shipper->email}}</td>
                            <td>{{$shipper->contact_person}}</td>
                                

                         <td><a href="{{route('shipper.delete',['id'=> $shipper->id])}}"><i class="glyphicon glyphicon-trash"></i> </a>
                            <a href="{{route('shipper.edit',['id'=> $shipper->id])}}"><i class="glyphicon glyphicon-pencil"></i></a></td>
                        </tr>
                        @endforeach
                    </table>
                    
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</div>
</div>
@endsection