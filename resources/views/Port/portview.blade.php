@extends('master')
<style>
  @media print{
    #printbtn{
      display: none;
    }
  }

  /* .panel.with-nav-tabs .panel-heading{
    padding: 5px 5px 0 5px;
}
.panel.with-nav-tabs .nav-tabs{
	border-bottom: none;
}
.panel.with-nav-tabs .nav-justified{
	margin-bottom: -1px;
}
/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs > li > a,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
}
.with-nav-tabs.panel-default .nav-tabs > .open > a,
.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
    color: #777;
	background-color: #ddd;
	border-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.active > a,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
	color: #555;
	background-color: #fff;
	border-color: #ddd;
	border-bottom-color: transparent;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
    color: #777;   
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
    background-color: #ddd;
}
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
.with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #555;
}
body{
    background:#1cbe45;
}
.adp-box{
    width:45%;
    margin:3rem auto;
    background:#fff;
    padding:20px;
}
.heading{
    color:#fff;
    text-align:center;
    text-shadow:0 0 4px rgba(0,0,0,0.25);
}
.input-group{
    margin-bottom:1rem;
    cursor:pointer;
}
.removeSlide {
    position: absolute;
    top: 45%;
    cursor: pointer;
}
@media(max-width:746px){
    .adp-box{
        width:80%;
    }
    .removeSlide {
        position: unset;
        float: right;
    }
} */
</style>
@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
        Port View
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Setup</li>
      <li class="active">Port View</li>
    </ol>
    
  </section>

  <section class="content">
       <h6>Port View</h6>
        <button onclick="myFunction()" id='printbtn' class="btn btn-info pull-right">Print</button>
        <form action="{{route('port.index',['id'=>$port->id])}}">
          @csrf
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputcode">Code:</label>
              <input type="text" class="form-control" id="inputcode" name="code" value="{{$port->code}}">
              </div>
                <div class="form-group col-md-5">
                  <label for="inputname">Name:</label>
                  <input type="text" class="form-control" id="inputname" name="name" value="{{$port->name}}">
                </div>
                <div class="form-group col-md-5">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="Address"  name="address" value="{{$port->address}}">
                </div>
                <div class="form-group col-md-5">
                  <label for="inputAmount">Amount</label>
                  <input type="text" class="form-control" id="inputamount" name="amount" value="{{$port->portcharges->amount}}">
                </div>
                {{-- <div class="row">
                  <div class="col-md-10">
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1default" data-toggle="tab">Import</a></li>
                                        <li><a href="#tab2default" data-toggle="tab">Export</a></li>
                                    </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                      <div class="form-group col-md-5">
                                        
                                          <div class="adp-box">
                                            <div class="inputWrapper">
                                              <label for="inputimport">Import</label>
                                              <Select name="charges_id" class="form-control">                          
                                                <option value="Import">Select Charges Type</option>
                                                  @foreach ($charges as $charge)
                                                    <option value="{{$charge->id}}">{{$charge->charges_type}}</option>
                                                  @endforeach  
                                              </Select> 
                                              <label for="inputcharge">Charges</label>
                                              <input type="text" class="form-control" id="inputcharge" name="Charges">
                                            </div>
                                            <button class="btn btn-success addInput"><i class="fa fa-plus"></i> &nbsp;Create New Feilds</button>
                                        </div>
                              
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2default">
                                      <div class="form-group col-md-5">
                                        <label for="inputexport">Export</label>
                                          <Select name="charges_id" class="form-control">                          
                                            <option value="export">Select Charges Type</option>
                                              @foreach ($charges as $charge)
                                                <option value="{{$charge->id}}">{{$charge->charges_type}}</option>
                                              @endforeach  
                                          </Select> 
                                          <label for="inputcharge">Charges</label>
                                          <input type="text" class="form-control" id="inputcharge" name="Charges">
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
              </div> --}}
                <div class="form-group col-md-5">
                  <label for="import">Import</label>
                  
                      @foreach ($import as $import)
                        
                              <br>{{$import->description}}:{{$import->code}}<br>
                         
                      @endforeach       
                </div>
                <div class="form-group col-md-5">
                  <label for="import">Export</label>
                  
                    @foreach ($export as $export)
                    <br> {{$export->description}}:{{$export->code}}<br>
                    @endforeach    
                      
                </div>
            </div>
            {{-- <a href="{{route('port.show')}}" class="btn btn-info pull-right">Back To Show</a> --}}
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
<script>
  function myFunction() {
    window.print();
  }
  </script>
  {{-- <script>
    let input_str = {
  title: "Slides",
  forms: [
    {
      type: "text",
      name: "name",
      class: "form-control mb-2",
      placeholder: "Enter Data..."
    },
    {
      type: "file",
      name: "image",
      class: "btn btn-light btn-sm mb-2 btn-block"
    },
    {
      type: "number",
      name: "mobile",
      class: "form-control mb-2",
      placeholder: "Enter Data..."
    }
  ],
  exportTo:$('#getData')
};

$(document).ready(() => {
  $(".addInput").click(function() {
    build_inputs($(this), input_str);
  });
});
let randId = 1;
function build_inputs(e, configs=false) {
    if(!configs){
        configs = {title:"Slides",forms:[{type:"text",name:"name",class:"form-control mb-2",placeholder:"Enter Data..."}],exportTo:false};
    }
  let ind = $(".adp-slides").length > 0 ? $(".adp-slides").length + 1 : 1;
  let str = `<div id="${configs.title +
    "-" +
    ind}" class="row adp-slides"><div class="col-md-10"><div class="form-group"><label><b>${
    configs.title
  } ${ind}</b></label>`;
  configs.forms.forEach(config => {
    str += `<input type="${config.type}" name="${config.name}" id="adpElem${randId}" class="adpInputs ${config.class}" data-rel="${configs.title+"-"+ind}" placeholder="${config.placeholder}">`;
    let currentVal = e
      .parent()
      .siblings()
      .val();
    $("#adpElem" + randId)
      .val(currentVal)
      .focus();
    e.parent()
      .siblings()
      .val("");
    randId++;
  });
  str += `</div></div><div class="col-md-2"><span class="badge badge-danger removeSlide" data-target="${configs.title +
    "-" +
    ind}"><i class="fas fa-trash-alt"></i></span></div></div>`;
  $(".inputWrapper").append(str);
  $(".removeSlide").click(function() {
    $("#" + $(this).attr("data-target")).remove();
  });
  if(configs.exportTo){
      $('.adpInputs').blur(()=>{
          let data = []
      $.each($('.adp-slides'),(i,e)=>{
          let obj = {},parentObj={};
       
         $.each($(e).children().find('input'),(i,e)=>{
             obj[$(e).attr('name')] = $(e).val();
         });
         parentObj[$(e).attr('id')]=obj;
        data.push(parentObj)
      })
    $(configs.exportTo).val(JSON.stringify(data,null,2))
      })
  }
}

    </script> --}}
@endsection
