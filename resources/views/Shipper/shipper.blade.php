@extends('master')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Shipper
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Setup</li>
      <li class="active">Shipper</li>
    </ol>
  </section>

  <section class="content">
   <form method="POST" action="{{route('shipper.store')}}">
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Name">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="contact_no">Contact No:</label>
          <input type="tel" class="form-control" id="contact_no" name="contact_no" placeholder="Contact No">
        </div>
        <div class="form-group col-md-6">
          <label for="fax">Fax No:</label>
          <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax No">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email id:</label>
          <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="contactperson">Contact Person</label>
          <input type="tel" class="form-control" id="contactperson" name="contactperson" placeholder="Contact Person">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="Address"  name="address" placeholder="1234 Main St">
      </div>
      
          <div class="form-group col-xs-2">
            <a href="{{route('welcome')}}" class="btn btn-info">Back</a>
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
