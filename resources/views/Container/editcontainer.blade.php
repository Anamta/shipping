@extends('master')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
        Container
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Setup</li>
      <li class="active">Container</li>
      <li><a href="{{route('welcome')}}" class="btn btn-info pull-right">Back</a></li>
    </ol>
    
  </section>

  <section class="content">
   <form method="POST" action="{{route('container.update',['id'=>$container->id])}}">
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="code">Code:</label>
          <input type="text" class="form-control" id="code" name="code" value="{{$container->code}}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="description">Description:</label>
          <input type="text" class="form-control" id="description" name="description" value="{{$container->description}}">
        </div>
        <div class="form-group col-md-6">
          <label for="cost">Cost:</label>
          <input type="text" class="form-control" id="cost" name="cost" value="{{$container->cost}}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputsupplier">Supplier:</label>
          <input type="text" class="form-control" id="supplier" name="supplier" value="{{$container->supplier}}">
        </div>
        <div class="form-group col-md-6">
          <label for="container_type_id">Container Type Id</label>
          <Select name="container_type_id" class="form-control">                          
            <option value="Select Container">Select Container</option>
              @foreach ($containertype as $containertype)
                {{-- <option value="{{$containertype->id}}">{{$containertype->size}}</option> --}}
                <option
                @if ($containertype->id==$container->container_type_id)
                    selected
                @endif 
                value="{{$containertype->id}}">{{$containertype->size}}</option>
              @endforeach  
          </Select> 
        </div>
        <div class="form-group col-md-6">
            <label for="port_type_id">Port Type Id</label>
            <Select name="port_id" class="form-control">                          
              <option value="Port Type">Port Type</option>
                @foreach ($port as $port)
                  <option 
                  @if ($port->id==$container->pur_port_id)
                  selected
                  @endif
                  value="{{$port->id}}">{{$port->name}}</option>
                @endforeach  
            </Select> 
          </div>
      </div>
      
          <div class="form-group col-xs-2">
            <button type="submit" class="btn btn-primary">Update</button> 
           </div>
           
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
