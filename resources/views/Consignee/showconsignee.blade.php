@extends('master')

@section('content')
<div class="content-wrapper">
<div class="right-side">
  <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Consignee Table</h3>
                    <a href="{{route('consignee.create')}}" class="btn btn-info pull-right">Add Consignee</a>
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
                        @foreach($consignees as $consignee)
                        <tr>
                            <td>{{$consignee->id}}</td>
                            <td>{{$consignee->name}}</td>
                            <td>{{$consignee->address}}</td>
                            <td>{{$consignee->fax_no}}</td>
                            <td>{{$consignee->contact_no}}</td>
                            <td>{{$consignee->email}}</td>
                            <td>{{$consignee->contact_person}}</td>
                                

                         <td><a href="{{route('consignee.delete',['id'=> $consignee->id])}}"><i class="glyphicon glyphicon-trash"></i> </a>
                            <a href="{{route('consignee.edit',['id'=> $consignee->id])}}"><i class="glyphicon glyphicon-pencil"></i></a></td>
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