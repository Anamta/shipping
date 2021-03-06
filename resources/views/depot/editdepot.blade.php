@extends('master')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
        Depot
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Setup</li>
      <li class="active">Depot</li>
      <li><a href="{{route('depot.create')}}" class="btn btn-info pull-right">Add Depot</a></li>
    </ol>
    
  </section>

  <section class="content">
   <form method="POST" action="{{route('depot.update',['id'=>$depot->id])}}">
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="code">Code:</label>
          <input type="text" class="form-control" id="code" name="code" value="{{$depot->code}}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$depot->name}}">
        </div>
        <div class="form-group col-md-6">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$depot->address}}">
          </div>
          <div class="form-group col-md-6">
            <label for="contact_no">Contact No:</label>
            <input type="tel" class="form-control" id="contact_no" name="contact_no" value="{{$depot->contact_no}}">
          </div>
          <div class="form-group col-md-6">
            <label for="contact_person">Contact Person:</label>
            <input type="tel" class="form-control" id="contact_person" name="contact_person" value="{{$depot->contact_person}}">
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
