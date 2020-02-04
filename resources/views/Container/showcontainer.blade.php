@extends('master')

@section('content')
<div class="content-wrapper">
<div class="right-side">
  <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Container Table</h3>
                    <a href="{{route('container.create')}}" class="btn btn-info pull-right">Add Container</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>S:No</th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Container Type</th>
                            <th>Company</th>
                            <th>Purchase From</th>
                            <th>Action</th>
                        </tr>
                        @foreach($containers as $container)
                        <tr>
                            <td>{{$container->id}}</td>
                            <td>{{$container->code}}</td>
                            <td>{{$container->description}}</td>
                            <td>{{$container->containertype->size}}</td>
                            <td>{{$container->company}}</td>
                            <td>{{$container->supplier}}</td>

                            
                                

                         <td><a href="{{route('container.delete',['id'=> $container->id])}}"><i class="glyphicon glyphicon-trash"></i> </a>
                            <a href="{{route('container.edit',['id'=> $container->id])}}"><i class="glyphicon glyphicon-pencil"></i></a></td>
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