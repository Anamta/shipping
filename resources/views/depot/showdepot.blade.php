@extends('master')

@section('content')
<div class="content-wrapper">
<div class="right-side">
  <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Depot Table</h3>
                    <a href="{{route('depot.create')}}" class="btn btn-info pull-right">Add Depot</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>S:No</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact No</th>
                            <th>Contact Person</th>
                            <th>Action</th>
                        </tr>
                        @foreach($depots as $depot)
                        <tr>
                            <td>{{$depot->id}}</td>
                            <td>{{$depot->code}}</td>
                            <td>{{$depot->name}}</td>
                            <td>{{$depot->address}}</td>
                            <td>{{$depot->contact_no}}</td>
                            <td>{{$depot->contact_person}}</td>
                        
                         <td><a href="{{route('depot.delete',['id'=> $depot->id])}}"><i class="glyphicon glyphicon-trash"></i> </a>
                            <a href="{{route('depot.edit',['id'=> $depot->id])}}"><i class="glyphicon glyphicon-pencil"></i></a></td>
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