<style>
  .card .card-header {
    padding: 1px 20px;
    border: none;
  }
  .col-sm-12{
    padding-left: 0px !important;
    padding-right: 8px !important;
  }

  @media screen and (max-width: 1366px) {
   .inp{
    width: 52% !important;
  } 

  .inp2{
    width: 59% !important;
  } 

  .frs{
    width: 172px !important;
  }
  label {
    font-weight: 500;
    padding-right: 0px !important;
    font-family: "Roboto", sans-serif;
  }
}
</style>
<style type="text/css">
 .custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 0.1rem;
}
.f-padding{
  margin-bottom: 10px;
}

.justify-content-center {

  -ms-flex-pack: center!important;

  justify-content: inherit !important;

}
.wizard, .tabcontrol {
  display: block;
  width: 100%;
  height: auto !important;
  overflow: scroll;
}

.wizard > .steps > ul > li {
  width: 16%;
}

@media screen and (max-width: 1366px) {
  .wizard > .steps > ul > li {
    width: 16% !important;
    font-size: 11px !important;
  }
}
.wizard > .content {
  background: #ffffff;
  min-height: 500px !important;
  padding: 20px;
}

.side{
  margin-left: 8px;
}
</style>
<div class="content-page">             
  <div class="content">                                             
    <!-- Start content -->             
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row" id="dashboard-row">
        <div class="col-sm-12">
          <h4 class="pull-left page-title" style="color: #000;font-weight:200;">&nbsp;<i class="ion-arrow-right-b"></i> &nbsp;&nbsp;PCC Applications / <a href="javascript::void(0);"  onclick="history.back();" >Back</a></h4>
          <ol class="breadcrumb pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">PCC</a></li>
            <li class="active">PCC Applications</li>
          </ol>
        </div>
      </div>

      <div class="row" id="default-form">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header" style="background-color: #317eeb;"></div>
            <form action="{{ URL::to('land/create/registration')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
              @csrf
              <div class="card-body" >
                <p style="font-size: 17px; font-weight: 700;">Land Details</p>
                <div class="col-md-5">
                  <div class="row form-group">
                    <label class="col-sm-3 control-label" for="example-input-normal">Search Land</label>
                    <div class="col-sm-5">
                      <div class="input-group">
                        <input type="text" id="searchland" name="land_name" class="form-control" placeholder="Search">
                        <input type="hidden" name="land_id" id="land_id">
                        <span class="input-group-prepend">
                          <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button> &nbsp;
                          <button type="button" class="btn waves-effect waves-light btn-primary" onclick="addlandModel()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New Land"><i class="fa fa-plus"></i></button>
                        </span>
                      </div>
                      <div id="land_list" ></div>
                    </div>
                  </div> 
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-4">
                      <p>Plot No. : <b style="color: #F0560A;" id="p_no"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Plot Name :  <b style="color: #F0560A;" id="p_name"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Size :  <b style="color: #F0560A;" id="p_size"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Sector :  <b style="color: #F0560A;" id="sect"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Phase :  <b style="color: #F0560A;" id="phas"></b></p>
                    </div>
                    <div class="col-md-4">
                      <p>Block :  <b style="color: #F0560A;" id="l_block"></b></p>
                    </div>
                  </div>
                </div>
                <hr>
                <p style="font-size: 17px; font-weight: 700;">Customer Details</p>
                <div class="col-md-5">
                  <div class="row form-group">
                    <label class="col-sm-3 control-label" for="example-input-normal">Search Customer</label>
                    <div class="col-sm-5">
                      <div class="input-group">
                        <input type="text" name="cust_name" id="searchcustomer" class="form-control" placeholder="search customer" autocomplete="off" >
                        <input type="hidden" name="cust_id" id="cust_id">
                        <span class="input-group-prepend">
                          <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button>&nbsp;
                          <button type="button" class="btn waves-effect waves-light btn-primary" onclick="addcustomerModel()" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add New Customer"><i class="fa fa-plus"></i></button>
                        </span>
                      </div>
                      <div  id="customer_list" ></div>
                    </div>
                  </div> 
                </div>
                <div class="col-md-10">
                  <div class="row">
                    <div class="col-md-3">
                      <p>Name : <b style="color: #F0560A" id="c_name"></b></p>
                    </div>
                    <div class="col-md-3">
                      <p>Phone No. :  <b style="color: #F0560A" id="c_mobile"></b></p>
                    </div>
                    <div class="col-md-3">
                      <p>Email :  <b style="color: #F0560A" id="c_email"></b></p>
                    </div>
                    <div class="col-md-3">
                      <p>Company :  <b style="color: #F0560A" id="c_company"></b></p>
                    </div>
                  </div>
                </div>
                <hr>
                <p style="font-size: 17px; font-weight: 700;">Registration Details</p>
                <div class="row">
                  <div class="col-md-5">
                    <div class="row form-group">
                      <label class="col-sm-3 control-label" for="example-input-normal">Application No.</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="application_no" placeholder="201/0/01/2019">
                      </div>
                    </div> 
                  </div>
                  <div class="col-md-5">
                    <div class="row form-group">
                      <label class="col-sm-4 control-label" for="example-input-normal">Application Date.</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control autodate" name="application_date">
                      </div>
                    </div> 
                  </div>
                </div>
                <hr>
                <!-- hr>
                <p style="font-size: 17px; font-weight: 700;">Payment Info</p>
                <hr>
                <p style="font-size: 17px; font-weight: 700;">Review & Submit</p>
                <hr> -->
                <div class="col-md-12" style="text-align: right;">
                  <button type="submit" class="btn btn-primary waves-effect waves-light m-b-5">Submit</button>
                </div>
              </div> <!-- card -->  
            </div> <!-- container -->
          </div> <!-- content -->
        </form>
      </div>
    </div>    
  </div>


  <script type="text/javascript">
    try{
      function addcustomerModel() { 
       $('#add_customer').modal('show');
     }
     function addlandModel() {
      $('#add_land').modal('show');
    }
  }catch(err)
  {
    var error =  err.message;
    alert(error)
  }

</script>
<!--  Create New Customer -->
<div id="add_customer" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog"> 
    <div class="modal-content"> 
      <div class="modal-header">
        <h4 class="modal-title mt-0">Add New Customer</h4> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <form action="{{ URL::to('land/customer/add')}}" method="POST" id="FormValidation" enctype="multipart/form-data" autocomplete="off" >
        @csrf
        <div class="modal-body"> 
          <div class="row"> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">First Name <font color="red">*</font></label> 
                <input type="text" class="form-control" name="f_name" id="f_name" required="" aria-required="true" placeholder=""> 
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-2" class="control-label">Last Name <font color="red">*</font></label> 
                <input type="text" class="form-control" name="l_name" id="l_name" required="" aria-required="true" placeholder=""> 
              </div> 
            </div> 
          </div> 
          <div class="row"> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-3" class="control-label">Occupation <font color="red">*</font></label> 
                <input type="text" class="form-control" name="occupation" id="occupation" required="" aria-required="true" placeholder=""> 
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-4" class="control-label">DOB <font color="red">*</font></label> 
                <input type="text" class="form-control autodate" name="dob" id="dob" required="" aria-required="true" placeholder="DD-MM-YYYY"> 
              </div> 
            </div> 
          </div> 
          <div class="row">          
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-5" class="control-label">Contact <font color="red">*</font></label> 
                <input  type="number" maxlength="10" minlength="10" min="1" class="form-control" name="mobile" id="mobile" required="" aria-required="true" placeholder=""> 
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-6" class="control-label">Email <font color="red">*</font></label> 
                <input type="email" class="form-control" name="email" id="email" required="" aria-required="true" placeholder=""> 
              </div> 
            </div> 
            
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-6" class="control-label">Company Type<font color="red">*</font></label> 
                <select class="form-control" name="company_type" id="e_company_type" required="">
                  <option value="">Select Company Type</option>
                  <option value="ltd">LTD</option>
                  <option value="llp">LLP</option>
                  <option value="proprietorship">Proprietorship</option>
                </select>
              </div> 
            </div> 
            <div class="col-md-6"> 
              <div class="form-group"> 
                <label for="field-6" class="control-label">Company <font color="red">*</font></label> 
                <input type="text" class="form-control" name="company" id="company" required="" aria-required="true" placeholder=""> 
              </div> 
            </div>
            <div class="col-md-6"> 
              <div class="form-group"> 
                <p class="control-label"><b>Gender</b> <font color="red">*</font></p>
                <div class="radio radio-info form-check-inline">
                  <input type="radio" name="gender" id="genader" value="male">
                  <label for="inlineRadio1"> Male </label>
                </div>
                <div class="radio radio-info form-check-inline">
                  <input type="radio" name="gender" id="genader" value="female">
                  <label for="inlineRadio1"> Female </label>
                </div>
              </div>  
            </div> 
          </div> 
          <div class="row"> 
            <div class="col-md-12"> 
              <div class="form-group no-margin"> 
                <label for="field-7" class="control-label">Address</label> 
                <textarea class="form-control" id="address" name="address" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required > </textarea> 
              </div> 
            </div> 
          </div> 
        </div> 
        <div class="modal-footer"> 
          <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
          <button type="submit" class="btn btn-info waves-effect waves-light">Save</button> 
        </div> 
      </form>
    </div> 
  </div>
</div><!-- /.modal -->



<!--  Create New Land -->
<div class="modal fade bs-example-modal-lg" id="add_land" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mt-0" id="myLargeModalLabel">Create New Land</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('land/add')}}" method="post"  id="FormValidation"  required="" aria-required="true">
        @csrf
        <div class="modal-body">
         <div class="row gutters justify-content-center">
          <div class="card-body">                          
            <div class="row">
              <div class="col-sm-12">
               <div class="row"> 
                <div class="col-md-4"> 
                 <div class="form-group"> 
                  <label for="field-4" class="control-label">Sector/Zone</label> 
                  <select class="form-control" name="area" id="area" required="" aria-required="true">
                    <option value="">Select Sector/Zone</option>
                    @foreach($zone as $key=>$val)
                    @if($val->sector_zone!='')
                    <option value="{{$val->sector_zone}}" @if(@$val->sector_zone==@$editData->area){{'selected'}} @endif>{{$val->sector_zone}}</option>
                    @endif
                    @endforeach  
                  </select>
                </div> 
              </div> 
              <div class="col-md-4"> 
                <div class="form-group"> 
                  <label for="field-4" class="control-label">Phase</label> 
                  <select class="form-control" name="sector" id="sector">
                    <option value="">Select Phase</option>
                    @foreach($phase as $key=>$val)
                    @if($val->phase!='')
                    <option value="{{$val->phase}}" @if(@$val->phase==@$editData->sector ?? ''){{'selected'}} @endif >{{$val->phase}}</option>
                    @endif
                    @endforeach  
                  </select>
                </div> 
              </div> 
              <div class="col-md-4"> 
                <div class="form-group"> 
                  <label for="field-4" class="control-label">Block</label> 
                  <select class="form-control" name="block" id="block">
                    <option value="">Select Block</option>
                    @foreach($block as $key=>$val)
                    @if($val->block!='')
                    <option value="{{$val->block}}" @if(@$val->block==@$editData->block ?? ''){{'selected'}} @endif >{{$val->block}}</option>
                    @endif
                    @endforeach  
                  </select>
                </div> 
              </div> 
            </div>
            <div class="row"> 
             <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-4" class="control-label">Plot No</label> 
                <input type="text" class="form-control" name="plot_no" id="plot_no" value="" placeholder="" required="" aria-required="true"> 
              </div> 
            </div> 
            <div class="col-md-4"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">Plot Name</label> 
                <input type="text" class="form-control" name="land_name" id="land_name" value="" placeholder="" required="" aria-required="true"> 
              </div> 
            </div> 
            <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">Select UOM</label> 
                <select class="form-control"  name="plot_size" id="plot_size" required="" aria-required="true">
                  <option value="">Select UOM</option>
                  <option value="sq.mtr">Square Meter</option>
                  <option value="sq.inch">Square Inch</option>
                  <option value="sq.ft">Square feet</option>
                  <option value="acre">Acre</option>
                  <option value="hectare">Hectare</option>
                </select>
              </div> 
            </div>
            <div class="col-md-2"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">Size</label> 
                <input type="text" class="form-control"  name="plot_value" id="plot_value" value="" placeholder="" required="" aria-required="true"> 
              </div> 
            </div>  
          </div>
          <div class="row"> 
            <div class="col-md-12"> 
              <div class="form-group no-margin"> 
                <label for="field-7" class="control-label">Address</label> 
                <textarea class="form-control autogrow" name="address"  id="address" placeholder="Write your address here...." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px" required ></textarea> 
              </div> 
            </div> 

            <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-1" class="control-label">City/District</label> 
                <!-- <input type="text" class="form-control"  placeholder="Ex:-noida,kanpur.." required="" aria-required="true"> -->
                <select class="form-control"  name="city" id="city" required="" aria-required="true">
                  <option  value="">Select City</option>    
                  <option  value="Jamshedpur">Jamshedpur</option>                  
                  <option value="Ranchi">Ranchi</option>                  
                  <option value="Bokaro">Bokaro</option>                  
                  <option value="Dhanbad">Dhanbad</option>                  
                  <option  value="East Singhbhum">East Singhbhum</option>                  
                  <option  value="Saraikela kharsawan">Saraikela kharsawan</option>                  
                </select>
              </div> 
            </div> 
            <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-2" class="control-label">State/Province</label> 
                <!--<input type="text" class="form-control"  placeholder="Ex:-delhi,uttar pradesh.." required="" aria-required="true">-->
                <select class="form-control"  name="state" id="state" required="" aria-required="true">
                  <option value="">Select State</option>  
                  <option value="Jharkhand">Jharkhand</option> 
                </select> 
              </div> 
            </div> 

            <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-5" class="control-label">Country</label> 
                <!--<input type="text" class="form-control"  placeholder="Ex:-India,US,UK.." required="" aria-required="true"> -->
                <select class="form-control"  name="country" id="country" required="" aria-required="true">
                  <option value="">Select Country</option>  
                  <option value="india">India</option>   
                </select> 
              </div> 
            </div> 

            <div class="col-md-3"> 
              <div class="form-group"> 
                <label for="field-3" class="control-label">Pincode</label> 
                <input type="text" class="form-control" name="pincode" id="pincode" type="number" maxlength="6" minlength="6" min="1"  placeholder="" required="" aria-required="true"> 
              </div> 
            </div> 
          </div> 
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-12" style="    text-align: right; margin-bottom: 6px;">
  <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
</div>
</form>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
 try{
  function Registration() {

   $('#add_customer').modal('show');
 }
</script>


<script type="text/javascript">
  $(document).ready(function () {
    $('#searchcustomer').on('keyup',function() {
      var query = $(this).val();
      if (query != '') { 
       $("#loader1").css("display","block");
       $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
       $.ajax({
        url: "{{url('land/serachcustomers/')}}" + '/' + query,
        type:"GET",
        success:function (data) {
          $("#loader1").css("display","none");
          $('#customer_list').html(data);
        }
      })
     }else{
       $('#customer_list').html(""); 
     }
   });
    $(document).on('click', 'td', function(){
      var value = $(this).text();
      $('#customer_list').html("");
    });

    /* Land */
    $('#searchland').on('keyup',function() {
      var query = $(this).val();
      if (query != '') { 
       $("#loader1").css("display","block");
       $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
       $.ajax({
        url: "{{url('land/serachland/')}}" + '/' + query,
        type:"GET",
        success:function (data) {
          $("#loader1").css("display","none");
          $('#land_list').html(data);
        }
      })
     }else{
       $('#land_list').html(""); 
     }
   });
    $(document).on('click', 'td', function(){
      var value = $(this).text();
      $('#land_list').html("");
    });

  });

  function addcustomer(id) { 
    $("#loader1").css("display","block");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "{{url('land/customer/add/')}}" + '/' + id,
      method: "POST",
      contentType: 'application/json',
      success: function(data) {
        console.log(data)
        $("#loader1").css("display","none");
        var name = data.f_name + ' ' + data.l_name;
        var email  = data.email;
        var mobile = data.mobile;
        var company = data.company;
        document.getElementById("cust_id").value = data.id;
        document.getElementById("searchcustomer").value = name;
        document.getElementById("c_name").innerText = name;
        document.getElementById("c_email").innerText = email;
        document.getElementById("c_mobile").innerText = mobile;
        document.getElementById("c_company").innerText = company;
      }
    });
  }


  function addland(id) {  
    $("#loader1").css("display","block");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "{{url('land/land/add/')}}" + '/' + id,
      method: "POST",
      contentType: 'application/json',
      success: function(data) {
        console.log(data)
        $("#loader1").css("display","none");   
        var name = data.land_name;     
        document.getElementById("land_id").value = data.id;
        document.getElementById("searchland").value = name;
        document.getElementById("p_no").innerText = data.plot_no;
        document.getElementById("p_name").innerText = name;
        document.getElementById("p_size").innerText = data.plot_size+' '+data.uom;
        document.getElementById("sect").innerText = data.area;
        document.getElementById("phas").innerText = data.sector;
        document.getElementById("l_block").innerText = data.block;

      }
    });
  }

</script>

