@extends('master')

@section('content')
<div class="content-wrapper">
<div class="right-side">
  <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Vessel Table</h3>
                    <a href="{{route('vessel.create')}}" class="btn btn-info pull-right">Add Vessel</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>S:No</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Owner</th>
                            <th>Action</th>
                        </tr>
                        @foreach($vessels as $vessel)
                        <tr>
                            <td>{{$vessel->id}}</td>
                            <td>{{$vessel->code}}</td>
                            <td>{{$vessel->name}}</td>
                            <td>{{$vessel->owner}}</td>
                        
                         <td><a href="{{route('vessel.delete',['id'=> $vessel->id])}}"><i class="glyphicon glyphicon-trash"></i> </a>
                            <a href="{{route('vessel.edit',['id'=> $vessel->id])}}"><i class="glyphicon glyphicon-pencil"></i></a></td>
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