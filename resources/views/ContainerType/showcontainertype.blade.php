@extends('master')

@section('content')
<div class="content-wrapper">
<div class="right-side">
  <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Container Type Table</h3>
                    <a href="{{route('containertype.create')}}" class="btn btn-info pull-right">Add Container Type</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>S:No</th>
                            <th>Size</th>
                            <th>Action</th>
                        </tr>
                        @foreach($containertypes as $containertype)
                        <tr>
                            <td>{{$containertype->id}}</td>
                            <td>{{$containertype->size}}</td>

                         <td><a href="{{route('containertype.delete',['id'=> $containertype->id])}}"><i class="glyphicon glyphicon-trash"></i> </a>
                            <a href="{{route('containertype.edit',['id'=> $containertype->id])}}"><i class="glyphicon glyphicon-pencil"></i></a></td>
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