@extends('master')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
        Vessel
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Setup</li>
      <li class="active">Vessel</li>
      <li><a href="{{route('welcome')}}" class="btn btn-info pull-right">Back</a></li>
    </ol>
    
  </section>

  <section class="content">
   <form method="POST" action="{{route('vessel.store')}}">
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="code">Code:</label>
          <input type="text" class="form-control" id="code" name="code" placeholder="Code">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
          <label for="owner">Owner:</label>
          <input type="text" class="form-control" id="owner" name="owner" placeholder="Owner">
        </div>
      </div>
      
          <div class="form-group col-xs-2">
            <button type="submit" class="btn btn-primary">Create</button> 
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
