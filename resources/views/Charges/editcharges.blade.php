@extends('master')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Charges
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Setup</li>
      <li class="active">Charges</li>
    </ol>
  </section>

  <section class="content">
   <form method="POST" action="{{route('charges.update',['id'=>$charge->id])}}">
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputcode">Code:</label>
          <input type="text" class="form-control" id="inputcode" name="code" value="{{$charge->code}}">
        </div>
        <div class="form-group col-md-6">
          <label for="chargetype">Charges Type:</label>
          <Select name="charges" class="form-control">                          
            <option value="Import">Import</option>
            <option value="Export">Export</option>
          </Select>  
            {{-- @if (!$edit==true)
            <option value="{{$charge->id}}">{{$charge->charges_type}}</option>
            selcted   
            @else
            @endif                      
          <option value="{{$charge->id}}">{{$charge->charges_type}}</option>
            <option value="{{$charge->id}}">{{$charge->charges_type}}</option> --}}
        </div>
        <div class="form-group col-md-6">
          <label for="inputDesc">Description</label>
        <textarea class="form-control" id="description"  name="desc" >{{$charge->description}}</textarea>
        </div>
      </div>
      
          <div class="form-group col-xs-2">
            <a href="{{route('charges.create')}}" class="btn btn-info">Create Charges</a>
            <button type="submit" class="btn btn-info">Update Charges</button>
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
