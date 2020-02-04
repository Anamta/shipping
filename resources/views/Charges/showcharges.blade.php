@extends('master')

@section('content')
<div class="content-wrapper">
<div class="right-side">
  <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Charges Table</h3>
                    <a href="{{route('charges.create')}}" class="btn btn-info pull-right">Add Charges</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>S:No</th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Charges Type</th>
                            <th>Action</th>
                        </tr>
                        @foreach($charges as $charge)
                        <tr>
                            <td>{{$charge->id}}</td>
                            <td>{{$charge->code}}</td>
                            <td>{{$charge->description}}</td>
                            <td>{{$charge->charges_type}}</td>

                         <td><a href="{{route('charges.delete',['id'=> $charge->id])}}"><i class="glyphicon glyphicon-trash"></i> </a>
                            <a href="{{route('charges.edit',['id'=> $charge->id])}}"><i class="glyphicon glyphicon-pencil"></i></a></td>
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