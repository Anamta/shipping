@extends('master')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Port
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Setup</li>
      <li class="active">Port</li>
    </ol>
  </section>

  <section class="content">
   <form method="POST" action="{{route('port.update',['id'=>$ports->id])}}">
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputcode">Code:</label>
            <input type="text" class="form-control" id="inputcode" name="code" value="{{$ports->code}}">
          </div>
          <div class="form-group col-md-6">
              <label for="inputname">Name:</label>
              <input type="text" class="form-control" id="inputname" name="name" value="{{$ports->name}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="Address"  name="address" value="{{$ports->address}}">
            </div>
            <div class="form-group col-md-6">
              <label for="inputchargesid">Charges Id:</label>
              <Select name="charges_id" class="form-control">                          
                <option value="Import">Select Charges Type</option>
                  @foreach ($charges as $charge)
                    <option 
                    @if ($charge->id==$ports->portcharges->charges_id)
                    selected
                    @endif
                    value="{{$charge->id}}">{{$charge->charges_type}}</option>
                  @endforeach  
              </Select>  
            </div>
            <div class="form-group col-md-6">
              <label for="inputAmount">Amount</label>
              <input type="text" class="form-control" id="inputamount" name="amount" value="{{$ports->portcharges->amount}}">
            </div>
      </div>
      
          <div class="form-group col-xs-2">
            <a href="{{route('port.create')}}" class="btn btn-info">Create Port</a>
            <button type="submit" class="btn btn-info">Update Port</button>
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
