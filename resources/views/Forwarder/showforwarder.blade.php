@extends('master')

@section('content')
<div class="content-wrapper">
<div class="right-side">
  <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Forwarder Table</h3>
                    <a href="{{route('forwarder.create')}}" class="btn btn-info pull-right">Add Forwarder</a>
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
                        @foreach($forwarders as $forwarder)
                        <tr>
                            <td>{{$forwarder->id}}</td>
                            <td>{{$forwarder->name}}</td>
                            <td>{{$forwarder->address}}</td>
                            <td>{{$forwarder->fax_no}}</td>
                            <td>{{$forwarder->contact_no}}</td>
                            <td>{{$forwarder->email}}</td>
                            <td>{{$forwarder->contact_person}}</td>
                                

                         <td><a href="{{route('forwarder.delete',['id'=> $forwarder->id])}}"><i class="glyphicon glyphicon-trash"></i> </a>
                            <a href="{{route('forwarder.edit',['id'=> $forwarder->id])}}"><i class="glyphicon glyphicon-pencil"></i></a></td>
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