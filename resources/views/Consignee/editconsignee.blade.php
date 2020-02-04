@extends('master')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
        Consignee
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Setup</li>
      <li class="active">Consignee</li>
    </ol>
  </section>

  <section class="content">
   <form method="POST" action="{{route('consignee.update',['id'=>$consignee->id])}}">
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$consignee->name}}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="contact_no">Contact No:</label>
          <input type="tel" class="form-control" id="contact_no" name="contact_no" value="{{$consignee->contact_no}}">
        </div>
        <div class="form-group col-md-6">
          <label for="fax">Fax No:</label>
          <input type="text" class="form-control" id="fax" name="fax" value="{{$consignee->fax_no}}">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email id:</label>
          <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$consignee->email}}">
        </div>
        <div class="form-group col-md-6">
          <label for="contactperson">Contact Person</label>
          <input type="tel" class="form-control" id="contactperson" name="contactperson" value="{{$consignee->contact_person}}">
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="Address"  name="address" value="{{$consignee->address}}">
      </div>
      
          <div class="form-group col-xs-2">
            <a href="{{route('consignee.create')}}" class="btn btn-info">Create Consignee</a>
            <button type="submit" class="btn btn-info">Update Consignee</button>
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
