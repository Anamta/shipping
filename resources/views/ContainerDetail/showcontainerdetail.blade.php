@extends('master')

@section('content')
<div class="content-wrapper">
<div class="right-side">
  <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Container Detail Table</h3>
                    <a href="{{route('containerdetail.create')}}" class="btn btn-info pull-right">Add Container Detail</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>S:No</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            <th>Fax No</th>
                            <th>Url</th>
                            <th>Action</th>
                        </tr>
                        @foreach($containerdetails as $containerdetail)
                        <tr>
                            <td>{{$containerdetail->id}}</td>
                            <td>{{$containerdetail->code}}</td>
                            <td>{{$containerdetail->name}}</td>
                            <td>{{$containerdetail->address}}</td>
                            <td>{{$containerdetail->contact_no}}</td>
                            <td>{{$containerdetail->email}}</td>
                            <td>{{$containerdetail->fax_no}}</td>
                            <td>{{$containerdetail->url}}</td>

                         <td><a href="{{route('containerdetail.delete',['id'=> $containerdetail->id])}}"><i class="glyphicon glyphicon-trash"></i> </a>
                            <a href="{{route('containerdetail.edit',['id'=> $containerdetail->id])}}"><i class="glyphicon glyphicon-pencil"></i></a></td>
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