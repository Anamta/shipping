@extends('master')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Container Type
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Setup</li>
      <li class="active">Container Type</li>
    </ol>
  </section>

  <section class="content">
   <form method="POST" action="{{route('containertype.update',['id'=>$containertype->id])}}">
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputsize">Size:</label>
          <input type="text" class="form-control" id="inputsize" name="size" value="{{$containertype->size}}">
        </div>
      </div>
      
          <div class="form-group col-xs-2">
            <a href="{{route('containertype.create')}}" class="btn btn-info">Create Container Type</a>
            <button type="submit" class="btn btn-info">Update Container Type</button>
           </div>
           {{-- <div class="box-footer">
            <button type="submit" class="btn btn-default">Back</button>
            <button type="submit" class="btn btn-info pull-right">Create</button>
          </div> --}}
      
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </section>
    </div>
@endif
</div>
@endsection
