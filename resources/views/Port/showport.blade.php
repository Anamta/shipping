@extends('master')

@section('content')
<div class="content-wrapper">
<div class="right-side">
  <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Port Table</h3>
                    <a href="{{route('port.create')}}" class="btn btn-info pull-right">Add Port</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>S:No</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>View More Details</th>
                            <th>Action</th>
                        </tr>
                        @foreach($ports as $port)
                        <tr>
                            <td>{{$port->id}}</td>
                            <td>{{$port->code}}</td>
                            <td>{{$port->name}}</td>
                            <td>{{$port->address}}</td>
                            <td><a href="{{route('port.index',['id'=> $port->id])}}"><i class="glyphicon glyphicon-file"></i> </a>

                         <td><a href="{{route('port.delete',['id'=> $port->id])}}"><i class="glyphicon glyphicon-trash"></i> </a>
                            <a href="{{route('port.edit',['id'=> $port->id])}}"><i class="glyphicon glyphicon-pencil"></i></a></td>
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